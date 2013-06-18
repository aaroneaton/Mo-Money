class MoMoney {

  private $money_posessed;
  
  private $money_wanted;
  
  public function __construct( $money_posessed, $money_wanted ) {
    $this->money_posessed = $money_posessed;
    $this->money_wanted = $money_wanted;
    $this->make_mo_money();
  }
  
  private function make_mo_money() {
    $money = $this->money_posessed;
    while ( $money < $this->money_wanted ) {
      $money++;
    }
    $this->money_posessed = $money;
  }
  
  public function see_mo_money() {
    return $this->money_posessed;
  }
