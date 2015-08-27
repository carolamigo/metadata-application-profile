<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\V1;

    /**
     * Class ApplicationProfile
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class SearchMapper
    {

        private $c = [
            'AlternateTitle' => 'alternateTitle',
            'AIPUUID' => 'aipUUID',
            'Bottom' => 'bottom',
            'Campus' => 'campus',
            'Category' => 'category',
            'Citation' => 'citation',
            'Collection' => 'collection',
            'Contents' => 'contents',
            'Contributor' => 'contributor',
            'CopyrightHolder' => 'copyrightHolder',
            'Country' => 'country',
            'Cover' => 'cover',
            'Creator' => 'creator',
            'Credits' => 'credits',
            'Current' => 'current',
            'Date' => 'date',
            'DateAvailable' => 'dateAvailable',
            'DateCreated' => 'dateCreated',
            'DateIssued' => 'dateIssued',
            'DegreeGrantor' => 'degreeGrantor',
            'DepthOfCapture' => 'depthOfCapture',
            'DepthOfWater' => 'depthOfWater',
            'Description' => 'description',
            'DistanceOffshore' => 'distanceOffshore',
            'Edition' => 'edition',
            'Episode' => 'episode',
            'Extent' => 'extent',
            'Genre' => 'genre',
            'GeographicLocation' => 'geographicLocation',
            'GrantFundingAgency' => 'grantFundingAgency',
            'Identifier' => 'identifier',
            'Language' => 'language',
            'MethodOfCapture' => 'methodOfCapture',
            'OriginalPreserved' => 'originalPreserved',
            'PeerReviewStatus' => 'peerReviewStatus',
            'PersonOrCorporation' => 'personOrCorporation',
            'Program' => 'program',
            'ProjectWebsite' => 'projectWebsite',
            'ProvinceOrState' => 'provinceOrState',
            'Publisher' => 'publisher',
            'Reference' => 'reference',
            'RightsURI' => 'rightsURI',
            'ScholarlyLevel' => 'scholarlyLevel',
            'Series' => 'series',
            'Shore' => 'shore',
            'Source' => 'source',
            'StreamWidth' => 'streamWidth',
            'Subject' => 'subject',
            'Temperature' => 'temperature',
            'Tide' => 'tide',
            'Title' => 'title',
            'Type' => 'type',
            'URI' => 'uRI',
            'Vegetation' => 'vegetation',
            'Water' => 'water',
            'Watershed' => 'watershed'
        ];


    }
