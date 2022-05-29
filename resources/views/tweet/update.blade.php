<x-layout title='TOP | つぶやきアプリ'>
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">つぶやきアプリ</h2>
        @php
        $breadcrums = [
        ['href' => route('tweet.index'), 'label' => 'TOP'],
        ['href' => '#', 'label' => '編集']];
        @endphp
        <x-element.breadcrums :breadcrums="$breadcrums"></x-element.breadcrums>
        <x-tweet.form.put :tweet="$tweet"></x-tweet.form.put>
    </x-layout.single>
</x-layout>