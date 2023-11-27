<?php
require_once('ItemRepository.php');

if (isset($_POST['selectedCityId'])) {
    $selectedCityId = $_POST['selectedCityId'];

    $itemRepository = new ItemRepository();
    $city = $itemRepository->getCityById($selectedCityId);

    if ($city) {
        echo $city['zip_code'];
    } else {
        echo '<option value="">Postal code not available!</option>';
    }

    $itemRepository->closeConnection();
}