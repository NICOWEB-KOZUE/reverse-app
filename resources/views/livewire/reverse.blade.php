<?php

use function Livewire\Volt\{state, mount};

//state()で初期化
state(['word','reversed']);

// ページ読み込み時に{word}を受け取る
mount(function ($word) {
    $this->word = $word;
    $this->reversed = strrev($word);
});
?>

<div class="p-4">
    <h1>文字列反転アプリ</h1>
    <p>入力: {{ $word }}</p>
    <p>反転: {{ $reversed }}</p>
</div>
