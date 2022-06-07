<div class="types-container">
    <div class="types">
        <select class="select-type" name="type">
            <option value="description">Descripción</option>
            <option value="feature">Características</option>
            <option value="opinion">Opiniones</option>
        </select>
    </div>
    <div class="types-related">
        <div class="type-related active" data-elementtype="description">
                {!!$product->description!!}
        </div>
        <div class="type-related" data-elementtype="feature">
            <p>
                {!!$product->features!!}
            </p>
        </div>
        <div class="type-related" data-elementtype="opinion">
            {!!$product->comments!!}
        </div>
    </div>
</div>