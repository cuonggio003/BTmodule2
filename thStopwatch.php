<?php
class Stopwatch 
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('Y-m-d H:i:s'); 
        
    }
    public function start()
    {
        $this->startTime = date('Y-m-d H:i:s');
    }
    public function stop(){
        $this->endTime = date('Y-m-d H:i:s');
    }

    public function getElapsedTime(){
        echo "<br /> test <br />";
        return $this->getEndTime() - $this->getStartTime();
    }
    public function setStartTime($time)
    {
        $this->startTime = $time;
    }
    public function getStartTime()
    {
        echo "<br /> test <br />" ;
        echo $this->startTime;
        return $this->startTime;
    }
    public function setEndTime($time)
    {
        $this->endTime = $time;
    }
    public function getEndTime()
    {
        echo"<br />" . $this->endTime;
        return $this->endTime;
    }
}
$stop1 = new Stopwatch();
$stop1->start();

for ($i = 0; $i < 100000; $i++) {
    //cho start va stop no xa nhau 
}
$stop1->stop();
echo $stop1->getElapsedTime();


$start = microtime(true);
//do something
sleep(2);
$end =  (microtime(true) - $start);
echo "elapsed time : $end";