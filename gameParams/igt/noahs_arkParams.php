<?

class noahs_arkParams extends Params {
    public $reels = array(
        array(
            array(7,33,8,7,1,2,7,9,1,7,32,8,7,9,31,7,9,35,7,34,8,9,32,35,9,6,8,9,5,34,6,7,9,6,1,4,9,7,8,9,2,8,9,6,0,9,6,5,9,8,4,9,6,8,7,9,33,7,6,8,7,3,6,7,3,6,7,8,4,6,),
            array(6,9,51,6,4,7,6,1,7,6,8,7,6,2,35,6,8,33,6,8,9,6,8,7,6,9,7,6,9,3,6,9,52,6,1,9,3,7,9,8,7,2,8,52,35,8,51,34,8,51,5,34,8,7,9,52,7,6,8,7,9,8,7,6,8,9,7,8,9,0,8,32,9,6,51,31,8,),
            array(6,32,5,6,31,4,6,34,31,6,7,34,9,52,3,8,52,33,1,35,8,9,35,7,1,0,6,33,31,9,34,51,8,31,7,34,33,7,51,9,7,35,32,8,7,31,8,9,7,35,31,32,6,33,32,34,9,8,33,52,32,8,6,35,9,32,0,2,),
            array(35,9,34,35,6,34,35,6,33,35,6,31,2,0,5,3,0,1,9,6,3,8,31,51,32,33,8,7,35,51,9,1,51,35,4,0,31,32,34,51,7,6,52,32,7,8,5,2,31,7,8,6,1,4,3,2,8,4,1,51,3,34,1,33,5,52,32,33,7,34,32,0,34,31,51,5,9,2,4,31,3,8,35,4,33,6,9,32,8,33,2,),
            array(0,1,32,0,1,6,0,2,7,0,8,9,0,2,3,0,4,33,31,8,35,0,31,35,0,3,5,0,34,9,33,34,0,32,5,7,4,6,),
        ),
        array(
            array(6,7,0,6,9,7,43,9,6,41,8,7,44,43,6,41,42,8,9,42,40,8,44,7,8,40,9,),
            array(8,44,10,8,9,42,13,9,40,0,6,43,7,14,6,42,40,44,8,7,43,41,9,6,41,9,7,8,12,11,),
            array(7,6,9,7,11,9,7,8,6,7,8,14,7,8,0,7,8,41,7,8,6,9,13,8,9,42,7,40,6,43,40,6,7,42,10,6,11,8,13,12,6,44,8,9,14,12,7,9,44,8,6,9,41,6,10,9,8,43,9,),
            array(40,9,44,40,8,14,40,41,43,14,40,13,7,41,44,12,9,44,8,11,10,44,13,11,12,43,7,42,43,10,42,41,43,6,41,42,6,0,42,),
            array(0,10,43,0,10,44,0,40,6,0,41,8,0,6,43,0,41,14,0,13,11,0,42,9,8,12,44,7,40,14,42,7,9,12,13,11,),
        ),
    );

    public $reelConfig = array(3,3,3,3,3);

    public $symbols = array(
        'b01' => array(51),
        'b02' => array(52),
        'd01' => array(31),
        'd02' => array(32),
        'd03' => array(33),
        'd04' => array(34),
        'd05' => array(35),
        'd10' => array(40),
        'd11' => array(41),
        'd12' => array(42),
        'd13' => array(43),
        'd14' => array(44),
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
        's11' => array(11),
        's12' => array(12),
        's13' => array(13),
        's14' => array(14),
        'w01' => array(0),
    );

    public $collectingPay = true;
    public $collectingSymbols = array(
        array(1,31),
        array(2,32),
        array(3,33),
        array(4,34),
        array(5,35),

        array(10,40),
        array(11,41),
        array(12,42),
        array(13,43),
        array(14,44),
    );

    public $doubleCount = true;

    public $doubleCountScatter = array(52);

    public $doubleCountConfig = array(
        '31' => array(1,31),
        '32' => array(2,32),
        '33' => array(3,33),
        '34' => array(4,34),
        '35' => array(5,35),
        '0' => array(1,2,3,4,5,31,32,33,34,35,10,11,12,13,14,40,41,42,43,44),

        '40' => array(10,40),
        '41' => array(11,41),
        '42' => array(12,42),
        '43' => array(13,43),
        '44' => array(14,44),
    );


    // Вайлд
    public $wild = array(0);
    // Скаттер
    public $scatter = array(21,22);
    // Умножение ставки, когда выпали скаттеры
    public $scatterMultiple = array(
        '3' => 3,
    );

    public $winLines = array(
        // 1
        array(1,1,1,1,1),
        array(0,0,0,0,0),
        array(2,2,2,2,2),
        array(0,1,2,1,0),
        // 5
        array(2,1,0,1,2),
        array(0,0,1,2,2),
        array(2,2,1,0,0),
        array(1,0,1,2,1),
        array(1,2,1,0,1),
        // 10
        array(0,1,1,1,2),
        array(2,1,1,1,0),
        array(1,0,0,1,2),
        array(1,2,2,1,0),
        array(1,1,0,1,2),
        // 15
        array(1,1,2,1,0),
        array(0,0,1,2,1),
        array(2,2,1,0,1),
        array(1,0,1,2,2),
        array(1,2,1,0,0),
        // 20
        array(0,0,0,1,2),
        array(2,2,2,1,0),
        array(0,1,2,2,2),
        array(2,1,0,0,0),
        array(0,1,0,1,0),
        // 25
        array(2,1,2,1,2),
        array(0,1,1,1,0),
        array(2,1,1,1,2),
        array(1,0,0,0,1),
        array(1,2,2,2,1),
        // 30
        array(0,1,0,1,2),
    );

    public $payOnlyHighter = true;
    // настройка ставок
    public $currency = '$';
    public $curiso = 'USD';
    public $default_coinvalue = 0.05;
    public $defaultCoinsCount = 30;

    //public $denominations = array(0.01,0.02,0.03,0.04,0.05,0.1,0.25,0.5,1,2,3,4,5,6,7,8,9,10);
    public $denominations = array(1,2,3,5,10,20,30,50,100,200,300,500,1000);
    public $lang = 'en';
    public $flash_scale_exactfit = 1;

    public $winPay = array(
        array('symbol'=> 'w01', 'count'=> 5, 'multiplier'=> 10000),
        array('symbol'=> 'w01', 'count'=> 4, 'multiplier'=> 1000),
        array('symbol'=> 'w01', 'count'=> 3, 'multiplier'=> 300),

        array('symbol'=> 's01', 'count'=> 10, 'multiplier'=> 2500),
        array('symbol'=> 's01', 'count'=> 9, 'multiplier'=> 1000),
        array('symbol'=> 's01', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's01', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's01', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's01', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's01', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 's01', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's02', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's02', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's02', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's02', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's02', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's02', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's02', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 's02', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's03', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's03', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's03', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's03', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's03', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's03', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's03', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's03', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's04', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's04', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's04', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's04', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's04', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's04', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's04', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's04', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's05', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's05', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's05', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's05', 'count'=> 7, 'multiplier'=> 200),
        array('symbol'=> 's05', 'count'=> 6, 'multiplier'=> 150),
        array('symbol'=> 's05', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's05', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's05', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's06', 'count'=> 5, 'multiplier'=> 200),
        array('symbol'=> 's06', 'count'=> 4, 'multiplier'=> 20),
        array('symbol'=> 's06', 'count'=> 3, 'multiplier'=> 8),
        array('symbol'=> 's07', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's07', 'count'=> 4, 'multiplier'=> 15),
        array('symbol'=> 's07', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's08', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's08', 'count'=> 4, 'multiplier'=> 15),
        array('symbol'=> 's08', 'count'=> 3, 'multiplier'=> 5),
        array('symbol'=> 's09', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's09', 'count'=> 4, 'multiplier'=> 15),
        array('symbol'=> 's09', 'count'=> 3, 'multiplier'=> 5),


        array('symbol'=> 's10', 'count'=> 10, 'multiplier'=> 2500),
        array('symbol'=> 's10', 'count'=> 9, 'multiplier'=> 1000),
        array('symbol'=> 's10', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's10', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's10', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's10', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's10', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 's10', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's11', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's11', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's11', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's11', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's11', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's11', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's11', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 's11', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's12', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's12', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's12', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's12', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's12', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's12', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's12', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's12', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's13', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's13', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's13', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's13', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 's13', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 's13', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's13', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's13', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 's14', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 's14', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 's14', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 's14', 'count'=> 7, 'multiplier'=> 200),
        array('symbol'=> 's14', 'count'=> 6, 'multiplier'=> 150),
        array('symbol'=> 's14', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 's14', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 's14', 'count'=> 3, 'multiplier'=> 10),


        array('symbol'=> 'd01', 'count'=> 10, 'multiplier'=> 2500),
        array('symbol'=> 'd01', 'count'=> 9, 'multiplier'=> 1000),
        array('symbol'=> 'd01', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd01', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd01', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd01', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd01', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 'd01', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd02', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd02', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd02', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd02', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd02', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd02', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd02', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 'd02', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd03', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd03', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd03', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd03', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd03', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd03', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd03', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd03', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd04', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd04', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd04', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd04', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd04', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd04', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd04', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd04', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd05', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd05', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd05', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd05', 'count'=> 7, 'multiplier'=> 200),
        array('symbol'=> 'd05', 'count'=> 6, 'multiplier'=> 150),
        array('symbol'=> 'd05', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd05', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd05', 'count'=> 3, 'multiplier'=> 10),


        array('symbol'=> 'd10', 'count'=> 10, 'multiplier'=> 2500),
        array('symbol'=> 'd10', 'count'=> 9, 'multiplier'=> 1000),
        array('symbol'=> 'd10', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd10', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd10', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd10', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd10', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 'd10', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd11', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd11', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd11', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd11', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd11', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd11', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd11', 'count'=> 4, 'multiplier'=> 30),
        array('symbol'=> 'd11', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd12', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd12', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd12', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd12', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd12', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd12', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd12', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd12', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd13', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd13', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd13', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd13', 'count'=> 7, 'multiplier'=> 300),
        array('symbol'=> 'd13', 'count'=> 6, 'multiplier'=> 200),
        array('symbol'=> 'd13', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd13', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd13', 'count'=> 3, 'multiplier'=> 10),
        array('symbol'=> 'd14', 'count'=> 10, 'multiplier'=> 1000),
        array('symbol'=> 'd14', 'count'=> 9, 'multiplier'=> 800),
        array('symbol'=> 'd14', 'count'=> 8, 'multiplier'=> 500),
        array('symbol'=> 'd14', 'count'=> 7, 'multiplier'=> 200),
        array('symbol'=> 'd14', 'count'=> 6, 'multiplier'=> 150),
        array('symbol'=> 'd14', 'count'=> 5, 'multiplier'=> 100),
        array('symbol'=> 'd14', 'count'=> 4, 'multiplier'=> 25),
        array('symbol'=> 'd14', 'count'=> 3, 'multiplier'=> 10),
    );
}