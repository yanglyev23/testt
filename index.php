<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?
$data = Array(
    0 => Array(
        "id" => 49,
        "dtmpl_data" => Array(
            "id" => 5,
            "user_id" => 1,
            "dtmpl_name" => "Квартира",
            "dtmpl_cname" => "flat",
            "dtmpl_type" => 3,
            "status" => 1,
            "fields" => Array(
                "section" => Array(
                    "id" => 1,
                    "name" => "Корпус",
                    "field_value" => 1
                ),
                "rooms" => Array(
                    "id" => 3,
                    "name" => "Кол-во комнат",
                    "field_value" => 3
                ),
                "living_area" => Array(
                    "id" => 7,
                    "name" => "Жилая площадь",
                    "cname" => "living_area",
                    "field_value" => 66.86
                ),
                "price" => Array(
                    "id" => 16,
                    "name" => "Цена",
                    "field_value" => 5111355
                )
            )
        )
    )
);
foreach ($data as $object) {
?>
<div class="card">
    <div class="container">
        <p>Объект № <?echo $object["id"]?></p>
        <p>Тип объекта <?echo $object["dtmpl_data"]["dtmpl_name"]?></p>
        <?
            foreach ($object["dtmpl_data"]["fields"] as $field) {
        ?>
            <p>
                <?
                    echo $field["name"];
                    echo "&nbsp";
                    echo $field["field_value"]
                ?>
            </p>
        <?}?>
    </div>
</div>
<?}?>
</body>