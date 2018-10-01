<?php

use PHPUnit\Extensions\Database\TestCase;
class CompositeTest extends TestCase
{
    public function getDataSet()
    {
        $ds1 = $this->createFlatXmlDataSet('flatXmlTableTest.xml');

        $compositeDs = new PHPUnit\Extensions\Database\DataSet\DefaultDataSet();
        $compositeDs->addDataSet($ds1);

        return $compositeDs;
    }
}
?>
