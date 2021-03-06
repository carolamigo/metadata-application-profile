<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:23
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    trait GeographicDescription {

        /**
         * @var AbstractProperty
         */
        protected $Country;

        /**
         * @var AbstractProperty
         */
        protected $ProvinceOrState;

        /**
         * @return AbstractProperty
         */
        public function getCountry ()
        {
            return $this->Country;
        }

        /**
         * @return AbstractProperty
         */
        public function getProvinceOrState ()
        {
            return $this->ProvinceOrState;
        }

    }
