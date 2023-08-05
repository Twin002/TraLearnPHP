<?php


    namespace Tests\Unit;
    
    
    class YourTestClass extends \Codeception\Test\Unit
    {
        /**
         * @var \UnitTester
         */
        protected function setUp(): void
    {
        parent::setUp();
       
// Kết nối với cơ sở dữ liệu
        $this->getModule('Db')->_initialize();
       
// Thiết lập cấu hình kết nối cơ sở dữ liệu
        $this->getModule('Db')->_cleanup();
        $this->getModule('Db')->_loadDump('tests/Support/Data/demodb.sql');
    }
// Chèn dữ liệu vào cơ sở dữ liệu
    public function testInsertData()
    {
        $this->getModule('Db')->haveInDatabase('staff', [
            'HoTen' => 'Vũ Thị D',
            'Email' => 'vuthid@gmail.com',
        ]);
       
// Kiểm tra sự tồn tại của dữ liệu trong cơ sở dữ liệu
        $this->getModule('Db')->seeInDatabase('staff', [
            'HoTen' => 'Vũ Thị D',
            'Email' => 'vuthid@gmail.com',
        ]);
    }
// Cập nhật dữ liệu trong cơ sở dữ liệu
    public function testUpdateData()
    {
        $this->getModule('Db')->updateInDatabase('staff', [
            'Luong' => '15000',
        ], [
            'HoTen' => 'Trần Thị A',
        ]);
       
// Kiểm tra dữ liệu đã được cập nhật trong cơ sở dữ liệu
        $this->getModule('Db')->seeInDatabase('staff', [
            'HoTen' => 'Trần Thị A',
            'Luong' => '15000',
        ]);
    }
    
// Kiểm tra số lượng bản ghi có HoTen='Lê Văn C' có đúng là 1 bản ghi không
    public function testNumRecordsLeVanC()
    { 
        $this->getModule('Db')->seeNumRecords(1, 'staff', ['HoTen' => 'Lê Văn C']);
    }
    }
?>
