@wire('debounce.200ms')
<x-form-select name="service_id" label="Service Name" :options="Helper::getKeyValues('Service', 'title', 'id')" />

<x-form-input name="name" label="Name" type="text" />

<x-form-textarea name="message" label="message" required />

<x-form-input name="stars" label="No. of Stars" type="number" />
@endwire
