<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\InvestmentModel;
use App\Models\ReportModel;
use App\Models\UserModel;
use App\Models\NewsModel;

class Clients extends BaseController
{
    protected $reportModel = "";
    protected $userModel = "";
    protected $investmentModel = "";
    protected $categoryModel = "";
    protected $newsModel = "";

    public function __construct()
    {
        $this->reportModel = new ReportModel();
        $this->userModel = new UserModel();
        $this->investmentModel = new InvestmentModel();
        $this->categoryModel = new CategoryModel();
        $this->newsModel = new NewsModel();
    }

    public function index()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        
        $user = $this->userModel->find($userId);
        $investId = $this->investmentModel->getInvestmentId($userId);
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        // dd($investId);
        $dateId = $this->request->getVar('investdate');
        $underComp = 1;
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $underComp = 2;
        }
        $news = $this->newsModel->getLastNews($underComp);
        if ($dateId == null) {
            if ($user['role'] == 'client' and $investId == null) {
                $data = [
                    'tittle' => 'Dashboard | Report Management System',
                    'menu' => 'Dashboard',
                    'user' => $user,
                    'news' => $news
                ];

                return view('client/dashboard2', $data);
            }

            
            $lastInvestment = $this->investmentModel->getLastDateOfInvestment($userId);
            $category = $this->categoryModel->getCategory($investId);
            $totalInvest = $this->investmentModel->totalClientInvestment($investId);
            $totalUnit = $this->reportModel->totalUnit($investId);
            $totalRetail = $this->reportModel->totalRetail($investId);
            $totalCostLeft = $this->reportModel->totalCostLeft($investId);
            $totalFulfilled = $this->reportModel->totalFulfilled($investId);
            $getAllReportClient = $this->reportModel->getAllReportClient($investId);
            $investmentDate = $this->investmentModel->investmentDate($user['id']);
            $getVendorName = $this->reportModel->getVendorName($investId, $underComp);
        } else {
            $lastInvestment = $this->investmentModel->getWhere(['id' => $dateId])->getLastRow();
            $category = $this->categoryModel->getCategory($dateId);
            $totalInvest = $this->investmentModel->totalClientInvestment($dateId);
            $totalUnit = $this->reportModel->totalUnit($dateId);
            $totalRetail = $this->reportModel->totalRetail($dateId);
            $totalCostLeft = $this->reportModel->totalCostLeft($dateId);
            $totalFulfilled = $this->reportModel->totalFulfilled($dateId);
            $getAllReportClient = $this->reportModel->getAllReportClient($dateId);
            $investmentDate = $this->investmentModel->investmentDate($user['id']);
            $getVendorName = $this->reportModel->getVendorName($dateId, $underComp);
        }

        $data = [
            'tittle' => 'Dashboard | Report Management System',
            'menu' => 'Dashboard',
            'user' => $user,
            'totalInvest' => $totalInvest,
            'totalUnit' => $totalUnit,
            'totalRetail' => $totalRetail,
            'totalCostLeft' => $totalCostLeft,
            'totalFulfilled' => $totalFulfilled,
            'getAllReports' => $getAllReportClient,
            'category' => $category->category_name,
            'investDate' => $investmentDate,
            'lastInvestment' => $lastInvestment,
            'getVendorName' => $getVendorName,
            'news' => $news,
            'companySetting' => $companysetting
        ];
        return view('client/dashboard', $data);
    }

    public function accountSetting()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        $comp = 'swclient';
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
        }
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        $user = $this->userModel->find($userId);
        $data = [
            'tittle' => "Account Setting | Report Management System",
            'menu' => $user['fullname'] . "'s Setting",
            'user' => $user,
            'companySetting' => $companysetting
        ];

        return view('client/account_setting', $data);
    }

    public function updateSetting()
    {
        $post = $this->request->getVar();
        $photo = $this->request->getFile('photo');
        $fileName = "";

        if (!empty($photo->getTempName())) {
            $fileName = time() . $photo->getName();
            $photo->move('img', $fileName);
        }
        $user = $this->userModel->find($post['id']);
        if (!empty($post['new_password'])) {
            if (password_verify($post['old_password'], $user['password'])) {
                if ($fileName != "") {
                    $this->userModel->save(array(
                        "id" => $post['id'],
                        "fullname" => $post['fullname'],
                        "company" => $post['company'],
                        "address" => $post['address'],
                        "photo" => $fileName,
                        "under_comp" => $post['under_comp'],
                        "password" => password_hash($post['new_password'], PASSWORD_BCRYPT),
                    ));
                } else {
                    $this->userModel->save(array(
                        "id" => $post['id'],
                        "fullname" => $post['fullname'],
                        "company" => $post['company'],
                        "address" => $post['address'],
                        "under_comp" => $post['under_comp'],
                        "password" => password_hash($post['new_password'], PASSWORD_BCRYPT),
                    ));
                }
            } else {
                return redirect()->back()->with('failed', 'User Successfully Updated!');
            }
        } else {
            if ($fileName != "") {
                $this->userModel->save(array(
                    "id" => $post['id'],
                    "fullname" => $post['fullname'],
                    "company" => $post['company'],
                    "address" => $post['address'],
                    "photo" => $fileName,
                    "under_comp" => $post['under_comp']
                ));
            } else {
                $this->userModel->save(array(
                    "id" => $post['id'],
                    "fullname" => $post['fullname'],
                    "company" => $post['company'],
                    "address" => $post['address'],
                    "under_comp" => $post['under_comp']
                ));
            }
        }
        return redirect()->back()->with('success', 'User Successfully Updated!');
    }

    public function purchaseInventory()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        $comp = 'swclient';
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
        }
        $user = $this->userModel->find($userId);
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        $data = [
            'tittle' => "Purchase Inventory | Report Management System",
            'menu' => "Purchase Inventory",
            'user' => $user,
            'companySetting' => $companysetting
        ];

        return view('client/purchase_inventory', $data);
    }

    public function plReport()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        $comp = 'swclient';
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
        }
        $user = $this->userModel->find($userId);
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        $plReport = $this->reportModel->showPLReport($userId);
        $downloadPLReport = $this->reportModel->downloadPLReport($userId);
        $data = [
            'tittle' => "P&L Report | Report Management System",
            'menu' => "P&L Report",
            'user' => $user,
            'plReport' => $plReport,
            'file' => $downloadPLReport,
            'companySetting' => $companysetting
        ];
        return view('client/pl_report', $data);
    }

    public function test_json()
    {
        d("kwkwkw");
    }

    public function getStarted()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        $comp = 'swclient';
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
        }
        $user = $this->userModel->find($userId);
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        $getClientCostLeft = $this->reportModel->getClientCostLeft($userId);
        $monthdiff = $this->investmentModel->monthDiff($userId);

        $data = [
            'tittle' => "Get Started | Report Management System",
            'menu' => "Get Started",
            'user' => $user,
            'costLeft' => $getClientCostLeft,
            'monthDiff' => $monthdiff,
            'companySetting' => $companysetting
        ];
        return view('client/getstarted', $data);
    }

    public function brandApprovals()
    {
        $userId = session()->get('user_id');
        if (is_null($userId)) {
            return redirect()->to(base_url('/login'));
        }
        $comp = 'swclient';
        $underComp = 1;
        if (str_contains(base_url(uri_string()), 'eliteapp')) {
            $comp = 'eliteapp';
            $underComp = 2;
        }
        $companysetting = $this->db->query("SELECT * FROM company WHERE site = '$comp' ")->getRow();
        $brands = $this->categoryModel->getBrands();
        $user = $this->userModel->find($userId);
        $selectedBrand = $this->categoryModel->selectedBrand($userId, $underComp);
        $temp_brand = array();
        $check = 0;
        foreach ($brands->getResultArray() as $brand) {
            foreach ($selectedBrand->getResultArray() as $selected) {
                if ($brand['id'] == $selected['id']) {
                    $temp = array(
                        'id' => $brand['id'],
                        'brand_name' => $brand['brand_name'],
                        'checked' => 1
                    );
                    $check = 1;
                    array_push($temp_brand, $temp);
                }
            }
            if ($check == 0) {
                $temp = array(
                    'id' => $brand['id'],
                    'brand_name' => $brand['brand_name'],
                    'checked' => 0
                );
                array_push($temp_brand, $temp);
            }
            $check = 0;
        }
        $data = [
            'tittle' => "Brand Approvals | Report Management System",
            'menu' => "Brand Approvals",
            'user' => $user,
            'brands' => $temp_brand,
            'companySetting' => $companysetting
        ];
        return view('client/brand_approvals', $data);
    }
}
