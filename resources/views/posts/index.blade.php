@extends('layouts.master')

@section('content')

    <x-modal-component buttonColor="danger" modalColor="warning" modalType="danger" modalTextColor="dark" modalTitle="I'm Modal 1" modalBtnColor="danger">

        <x-slot:modal>
            Danger Btn
        </x-slot:modal>

        <x-slot:modalContent>
            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis
        </x-slot:modalContent>
        </x-modal-component>

    <x-modal-component buttonColor="success" modalColor="success" modalType="success" modalTextColor="light" modalTitle="I'm Modal 2" modalBtnColor="warning">
        <x-slot:modal>
            Success Btn
        </x-slot:modal>

        <x-slot:modalContent>
            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis
        </x-slot:modalContent>

    </x-modal-component>


{{--    <x-modal-component>--}}

{{--        @slot('modal')--}}
{{--            First Modal--}}
{{--        @endslot--}}

{{--        <x-slot:modal>--}}
{{--            First Modal--}}
{{--        </x-slot>--}}
{{--        </x-modal-component>--}}

{{--    <x-modal-component>--}}
{{--        <x-slot:modal>--}}
{{--            often--}}
{{--        </x-slot>--}}
{{--    </x-modal-component>--}}

{{--    <x-modal-component>--}}
{{--        <x-slot:modal>--}}
{{--            Last Modal--}}
{{--        </x-slot:modal>--}}
{{--    </x-modal-component>--}}
@endsection
