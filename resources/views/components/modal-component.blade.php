
{{--@props([--}}
{{--    'firstmodal',--}}
{{--    'oftin',--}}
{{--])--}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-{{$buttonColor}}" data-bs-toggle="modal" data-bs-target="#exampleModal-bg-{{$modalType}}">
{{$modal}}
{{--{{$modalContent}}--}}
{{--{{$oftin}}--}}
{{--{{$lastmodal}}--}}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-bg-{{$modalType}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-{{$modalColor}}">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-{{$modalTextColor}}" id="exampleModalLabel">{{$modalTitle}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$modalContent}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-{{$modalBtnColor}}">Save changes</button>
            </div>
        </div>
    </div>
</div>
