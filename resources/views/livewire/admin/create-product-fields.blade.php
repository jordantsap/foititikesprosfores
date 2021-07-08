<div>

    <div class="col-xs-3">
        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
            <label for="type_id">Κατηγορία Προϊόντος</label>
            @if ($errors->has('type_id'))
                <strong class="text-danger">{{ $errors->first('type_id') }}</strong>
            @endif
            <div class="input-group">
                <select id="category_id" wire:model="selectedCategories" class="form-control"
                    required>
                    <option value="">Επιλέξτε</option>
                    @foreach ($categories as $id => $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>

                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-list"></span>
                </span>

            </div>
        </div>
    </div>

    <div class="col-sm-3 form-group">
        <div>Υπόλοιπα Πεδία ανά Κατηγορία</div>
        @if ($fields)
        @foreach ($fields as $field)
        <label for="{{ $field->name }}">{{ $field->name }}</label>
        <input type="text" name="{{ $field->value->value }}">
        @endforeach
        @else Χωρίς έξτρα πεδία
        @endif
    </div>
</div>
