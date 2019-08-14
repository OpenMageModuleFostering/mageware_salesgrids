<?php

class MageWare_SalesGrids_Model_Resource_Order_Invoice
    extends Mage_Sales_Model_Resource_Order_Invoice
{
    public function getUpdateGridRecordsSelect($ids, &$flatColumnsToSelect, $gridColumns = null)
    {
        $select = parent::getUpdateGridRecordsSelect($ids, $flatColumnsToSelect, $gridColumns);

        $select->group('main_table.' . $this->getIdFieldName());

        return $select;
    }
}
