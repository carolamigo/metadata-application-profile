<?php
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait DataDescription {

        /**
         * @var AbstractProperty
         */
        private $CatalogueNumber;

        /**
         * @var AbstractProperty
         */
        private $CollectorNumber;

        /**
         * @var AbstractProperty
         */
        private $CollectedBy;

//        /**
//         * @var AbstractProperty
//        */
//        private $Cover;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $Current;

        /**
         * @var AbstractProperty
         */
        private $Map;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $MethodOfCapture;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $OriginalPreserved;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $Shore;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $StreamWidth;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $Tide;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $Water;
//
//        /**
//         * @var AbstractProperty
//         */
//        private $Vegetation;

        /**
         * @return AbstractProperty
         */
        public function getCatalogueNumber()
        {
            return $this->CatalogueNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectorNumber()
        {
            return $this->CollectorNumber;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectedBy()
        {
            return $this->CollectedBy;
        }

        /**
         * @return AbstractProperty
         */
        public function getMap()
        {
            return $this->Map;
        }



    }