<form action="{{ route('inventory.store') }}" method="post">
    @csrf
    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
    <x-modal.modal title="Item List" isFull="true">
       <div id="repeater">
            <input type="button" id="createElement" class="btn btn-danger" value="Add Element" />
            <div class="row my-5" id="structure" style="display:none">
                <div class="col-md-3">
                    <x-form.input label="Name" name="name"></x-form.input>
                </div>
                <div class="col-md-3">
                    <x-form.input type="number" label="Qty" name="qty"></x-form.input>
                </div>
                <div class="col-md-3">
                    <x-form.option label="Unit" name="unit" :items="getUnits()"></x-form.option>
                </div>
                <div class="col-md-3">
                    <x-form.input type="number" label="Price(1 unit)" name="price" placeholder="Price"></x-form.input>
                </div>
            </div>
            <div id="containerElement"></div>
        </div>
    </x-modal.modal>
</form>


@push('scripts')
    <script>
        (function ($) {
    $.fn.repeater = function (options) {
        // Default params
        var params = $.extend({
            structure: [],
            items: [],
            repeatElement: 'structure',
            createElement: 'createElement',
            removeElement: 'removeElement',
            containerElement: 'containerElement',
            groupName: 'group'
        }, options);

        var repeater = this;

        repeater.find('#' + params.createElement).click(function () {
            var cloned = repeater.find('#' + params.repeatElement).clone();
            var inputs = cloned.find(':input');
            var newItem = [];
            $.each(inputs, function (key, input) {
                var next = params.items.length;
                newItem.push({
                    id: $(input).attr('id'),
                    value: ''
                })
                $(input).attr('name', params.groupName + '[' + next + '][' + $(input).attr('name') + ']')
            })
            cloned.append('<input type="button" class="btn btn-light-danger ' + params.removeElement + '" value="remove" />')
            cloned.find('.' + params.removeElement).click(function () {
                $(this).parent().remove();
                if (params.onRemove !== undefined) {
                    params.onRemove();
                }
            })
            cloned.show()
            cloned.appendTo('#' + params.containerElement)
            if (params.onShow !== undefined) {
                params.onShow();
            }
            params.items.push(newItem)
        });

        if (params.items.length > 0) {
            $.each(params.items, function (key1, item) {
                var cloned = repeater.find('#' + params.repeatElement).clone();
                var inputs = cloned.find(':input');
                $.each(inputs, function (key2, input) {
                    $(input).attr('name', params.groupName + '[' + key1 + '][' + $(input).attr('name') + ']')
                })
                cloned.append('<input type="button" class="btn btn-light-danger ' + params.removeElement + '" value="remove" />')
                $.each(item.elements, function (index, element) {
                    cloned.find('#' + element.id).val(element.value)
                })
                cloned.find('.' + params.removeElement).click(function () {
                    $(this).parent().remove();
                    if (params.onRemove !== undefined) {
                        params.onRemove();
                    }
                })
                cloned.show()
                cloned.appendTo('#' + params.containerElement)
            })
        }

    }
}(jQuery));
    </script>


<script>
    $(function() {
    $('#repeater').repeater({
      items: [{
          elements: [{
              id: 'first_name',
              value: 'jQueryScript'
            },
            {
              id: 'languages',
              value: 'css'
            }
          ]
        },
      ]
    });
  });
  
  </script>
@endpush