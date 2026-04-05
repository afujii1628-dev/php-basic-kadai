<?php
// Foodクラス
class Food {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceを出力
    public function show_price(): void {
        echo $this->price . "<br>";
    }
}

// Animalクラス
class Animal {
    private string $name;
    private int $height;
    private int $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightを出力
    public function show_height(): void {
        echo $this->height . "<br>";
    }
}

// インスタンス作成
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// print_rで出力
echo "<pre>";
print_r($food);
print_r($animal);
echo "</pre>";

// メソッド実行
$food->show_price();
$animal->show_height();
?>