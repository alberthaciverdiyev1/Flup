<?php
class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("info");

    }
    public function Index()
    {
        
        $currencyInfo = $this->info->GetCurrency();
     
        $currencyInfoArray = array(
            "SendCurrencyInfo" => $currencyInfo
        );
        
        $this->load->view("Index",$currencyInfoArray); 
    }

    public function Table(){
        $databaseInfo = $this->info->GetAll();
        
        $currencyInfo = $this->info->GetCurrency();
        $databaseInfoArray = array(
            "SendArrayToView" => $databaseInfo
        );
        $currencyInfoArray = array(
            "SendCurrencyInfo" => $currencyInfo
        );
        
        $this->load->view("Table", array_merge($databaseInfoArray, $currencyInfoArray)); 

    }
    
    public function Insert()
    {

        $comment=$this->input->post("comment");
        $expense=$this->input->post("expense");
        $income=$this->input->post("income");
        $currency_id=$this->input->post("Currency_id");
        $remainingMoney=$income-$expense;
    
        $insert = $this->info->Insert(array(
            "comment" => $comment,
            "expense" => $expense,
            "income" => $income,
            "Currency_Id" =>$currency_id,
            "RemainingMoney"=>$remainingMoney
        ));
    
        if ($insert) {
            $this->Table();
        }
    }
    public function Delete($id)
    {
        
       $delete=$this->info->delete($id);
       $this->Table();

    }


}