 
<?php

    class PoolStatus extends DB\SQL\Mapper {

        protected $wallet = '';
        
        public function __construct(DB\SQL $db) {
            $this->wallet = \Base::instance()->get('wallet');

            parent::__construct($db, 'pools');      
        }

        public function getPools() {
            $this->load();
            return $this->query;
        }

    }