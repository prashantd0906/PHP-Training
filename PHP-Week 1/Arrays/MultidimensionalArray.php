<?php
$students = [
    ["John", 20, "A+"],
    ["Asha", 21, "B"],
    ["Ravi", 19, "A"]
];

echo $students[0][0]; // John
echo $students[1][1]; // 21
echo $students[2][2]; // A

?>

<?php
$students = [
    [
        "name" => "John",
        "age" => 20,
        "grade" => "A+"
    ],
    [
        "name" => "Asha",
        "age" => 21,
        "grade" => "B"
    ],
    [
        "name" => "Ravi",
        "age" => 19,
        "grade" => "A"
    ]
];

echo $students[1]["name"];  // John
echo $students[1]["grade"]; // B

?>
