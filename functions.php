<?php

    function printArr(array $numbers) {
        foreach ($numbers as $value) {
            echo "<p>" . $value . "</p>";
        }
    }

    function largest(array $numbers) {
        echo max($numbers);
    }

    function removeDups(array $numbers) {
        $numbers = array_unique($numbers, SORT_NUMERIC);

        foreach ($numbers as $value) {
            echo "<p>" . $value . "</p>";
        }
    }
