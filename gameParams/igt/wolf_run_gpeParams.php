<?

class wolf_run_gpeParams extends Params {
    public $reels = array(
        array(
            array(5,2,9,10,9,4,6,5,1,6,9,4,9,5,7,3,10,9,5,10,7,3,10,9,6,10,4,6,10,3,9,5,10,0,0,0,0,6,10,2,9,10,2,6,9,3,9,10,3,10,6,9,4,9,6,10,9,8,10,4,9,10,7,4,10,6,7,10,1,7,9,),
            array(4,8,9,6,3,9,7,8,2,9,51,7,4,7,6,7,3,10,1,5,8,10,1,9,4,7,51,10,1,8,51,8,9,4,10,9,4,8,5,8,3,10,5,3,5,8,5,4,10,3,7,5,4,7,5,0,0,0,0,0,10,51,7,10,4,7,6,7,1,8,6,7,1,8,0,0,0,0,10,2,6,10,51,5,4,6,2,5,6,9,1,6,5,6,3,7,9,7,1,9,5,9,3,5,7,),
            array(3,8,2,7,4,8,3,8,1,8,3,5,4,8,2,8,51,3,8,3,5,2,8,2,8,51,8,2,5,3,8,4,8,3,8,2,51,1,5,3,8,2,8,4,0,0,0,0,2,8,1,9,1,8,3,8,1,51,2,7,3,6,4,10,7,),
            array(4,9,4,10,1,0,0,0,0,0,4,5,2,9,1,6,2,7,4,51,7,1,7,4,7,51,10,2,7,4,51,4,7,1,6,1,9,4,6,1,8,1,9,2,10,4,8,0,0,0,0,0,5,1,8,1,9,4,8,10,1,7,4,9,8,1,10,6,3,9,4,10,0,0,0,0,0,0,8,10,3,10,3,5,4,10,1,8,2,9,3,6,2,10,3,8,9,),
            array(1,7,10,2,8,3,10,6,2,10,7,3,6,10,2,7,8,5,1,10,1,7,3,7,3,10,9,5,4,5,8,1,9,6,3,6,0,0,0,0,0,0,2,6,1,5,4,8,9,3,7,6,1,5,3,9,4,5,6,1,9,2,6,1,8,3,6,9,4,5,2,8,4,5,3,6,0,0,0,0,0,0,7,1,7,2,5,1,6,),
        ),
        array(
            array(5,6,9,10,9,4,7,5,10,9,7,4,9,5,7,3,10,9,5,10,7,3,10,9,6,10,4,6,10,3,9,5,10,0,0,0,0,8,10,2,7,10,8,1,9,0,0,0,0,1,6,0,0,0,0,10,7,0,0,0,0,10,7,5,6,10,7,6,0,0,0,0,9,4,7,9,10,0,0,0,0,5,6,3,5,8,3,9,10,8,6,5,7,2,6,5,4,6,0,0,0,0,0,0,8,),
            array(7,8,4,7,6,3,9,8,7,5,51,6,7,5,8,7,3,9,10,7,8,10,1,9,6,7,51,10,8,1,51,8,3,0,0,0,0,0,6,9,6,10,5,3,9,8,5,4,9,3,7,5,4,7,9,0,0,0,0,0,9,51,7,9,4,7,9,6,5,8,10,51,6,8,9,6,2,51,5,10,0,0,0,0,4,7,51,5,0,0,0,0,8,2,),
            array(3,0,0,0,0,4,9,5,1,8,6,5,10,8,7,9,51,7,8,3,5,51,8,9,2,51,8,6,5,51,6,5,8,5,7,5,10,6,8,6,0,0,0,0,4,5,7,4,8,10,4,9,10,4,6,51,7,6,9,10,6,3,7,0,0,0,0,8,7,10,7,9,0,0,0,0,7,9,8,51,3,8,9,3,10,9,8,10,6,9,6,10,7,2,6,9,10,6,8,9,1,8,),
            array(4,9,10,4,8,9,10,51,8,5,4,8,10,9,6,51,5,7,4,51,7,8,7,10,7,51,2,10,7,4,51,3,7,3,6,0,0,0,0,8,1,9,51,10,2,8,3,0,0,0,0,10,9,6,8,1,9,10,51,9,10,7,6,9,8,5,3,6,),
            array(6,7,10,6,8,3,10,6,9,10,7,3,6,10,8,7,6,5,9,10,6,3,5,7,3,10,9,5,4,5,8,7,9,10,6,0,0,0,0,0,0,5,10,6,7,5,4,8,9,1,7,6,3,5,8,9,5,5,6,2,9,10,7,1,8,3,6,9,2,5,6,8,5,4,7,6,10,8,6,9,4,8,9,7,8,9,10,4,9,10,5,),
        ),
    );

    public $reelConfig = array(4,4,4,4,4);

    public $symbols = array(
        'b01' => array(51),
        's01' => array(1),
        's02' => array(2),
        's03' => array(3),
        's04' => array(4),
        's05' => array(5),
        's06' => array(6),
        's07' => array(7),
        's08' => array(8),
        's09' => array(9),
        's10' => array(10),
        'w01' => array(0),
    );
    // Вайлд
    public $wild = array(0);
    // Скаттер
    public $scatter = array(51);
    // Умножение ставки, когда выпали скаттеры
    public $scatterMultiple = array(
        '3' => 2,
    );

    public $winLines = array(
        // 1
        array(1,1,1,1,1),
        array(2,2,2,2,2),
        array(0,0,0,0,0),
        array(3,3,3,3,3),
        // 5
        array(1,2,3,2,1),
        array(2,1,0,1,2),
        array(0,0,1,2,3),
        array(3,3,2,1,0),
        array(1,0,0,0,1),
        // 10
        array(2,3,3,3,2),
        array(0,1,2,3,3),
        array(3,2,1,0,0),
        array(1,0,1,2,1),
        array(2,3,2,1,2),
        // 15
        array(0,1,0,1,0),
        array(3,2,3,2,3),
        array(1,2,1,0,1),
        array(2,1,2,3,2),
        array(0,1,1,1,0),
        // 20
        array(3,2,2,2,3),
        array(1,1,2,3,3),
        array(2,2,1,0,0),
        array(1,1,0,1,1),
        array(2,2,3,2,2),
        // 25
        array(1,2,2,2,3),
        array(2,1,1,1,0),
        array(0,0,1,0,0),
        array(3,3,2,3,3),
        array(0,1,2,2,3),
        // 30
        array(3,2,1,1,0),
        array(0,0,0,1,2),
        array(3,3,3,2,1),
        array(1,0,0,1,2),
        array(2,3,3,2,1),
        // 35
        array(0,1,1,2,3),
        array(3,2,2,1,0),
        array(1,0,1,2,3),
        array(2,3,2,1,0),
        array(0,1,2,3,2),
        // 40
        array(3,2,1,0,1),
    );

    public $payOnlyHighter = true;
    // настройка ставок
    public $currency = '$';
    public $curiso = 'USD';
    public $default_coinvalue = 0.05;
    public $defaultCoinsCount = 40;

    //public $denominations = array(0.01,0.02,0.03,0.04,0.05,0.1,0.25,0.5,1,2,3,4,5,6,7,8,9,10);
    public $denominations = array(1,2,3,5,10,20,30,50,100,200,300,500,1000);
    public $lang = 'en';
    public $flash_scale_exactfit = 1;

    public $winPay = array(
        array('symbol'=> 'w01', 'count'=> 5, 'multiplier'=> 1000),
        array('symbol'=> 'w01', 'count'=> 4, 'multiplier'=> 200),
        array('symbol'=> 'w01', 'count'=> 3, 'multiplier'=> 50),
        array('symbol'=> 's01', 'count'=> 5, 'multiplier'=> 400),
        array('symbol'=> 's01', 'count'=> 4, 'multiplier'=> 100),
        array('symbol'=> 's01', 'count'=> 3, 'multiplier'=> 25),
        array('symbol'=> 's02', 'count'=> 5, 'multiplier'=> 400),
        array('symbol'=> 's02', 'count'=> 4, 'multiplier'=> 100),
        array('symbol'=> 's02', 'count'=> 3, 'multiplier'=> 25),
        array('symbol'=> 's03', 'count'=> 5, 'multiplier'=> 250),
        array('symbol'=> 's03', 'count'=> 4, 'multiplier'=> 75),
        array('symbol'=> 's03', 'count'=> 3, 'multiplier'=> 20),
        array('symbol'=> 's04', 'count'=> 5, 'multiplier'=> 250),
        array('symbol'=> 's04', 'count'=> 4, 'multiplier'=> 75),
        array('symbol'=> 's04', 'count'=> 3, 'multiplier'=> 20),
        array('symbol'=> 's05', 'count'=> 5, 'multiplier'=> 150),
        array('symbol'=> 's05', 'count'=> 4, 'multiplier'=> 50),
        array('symbol'=> 's05', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's06', 'count'=> 5, 'multiplier'=> 150),
        array('symbol'=> 's06', 'count'=> 4, 'multiplier'=> 50),
        array('symbol'=> 's06', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's07', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's07', 'count'=> 4, 'multiplier'=> 20),
        array('symbol'=> 's07', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's08', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's08', 'count'=> 4, 'multiplier'=> 20),
        array('symbol'=> 's08', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's09', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's09', 'count'=> 4, 'multiplier'=> 20),
        array('symbol'=> 's09', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's10', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's10', 'count'=> 4, 'multiplier'=> 20),
        array('symbol'=> 's10', 'count'=> 3, 'multiplier'=> 5),
    );
}