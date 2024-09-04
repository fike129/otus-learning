<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


use Bitrix\Main\Type;

use Models\Lists\CarsPropertyValuesTable as CarsTable;
use Models\HospitalClientsTable as Clients;

use Models\BookTable as Books;
use Models\PublisherTable as Publishers;
use Models\AuthorTable as Authors;
use Models\WikiprofileTable as Wikiprofiles;


$collection = Books::getList([
    'select' => [
        'id',
        'name',
        'publish_date'
    ]
])->fetchCollection();
foreach ($collection as $key => $book) {
    pr('название '.$book->getName(). ' дата выхода:' .$book->getPublishDate());
}



