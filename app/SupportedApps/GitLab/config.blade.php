<h2>{{ __('app.apps.config') }} ({{ __('app.optional') }}) @include('items.enable')</h2>
<div class="items">
    <div class="input">
        <label>{{ strtoupper(__('app.url')) }}</label>
        {!! Form::text('config[override_url]', (isset($item) ? $item->getconfig()->override_url : null), array('placeholder' => __('app.apps.override'), 'id' => 'override_url', 'class' => 'form-control')) !!}
    </div>
    <div class="input">
        <label>Health Token</label>
        <small>Admin Area &raquo; Monitoring &raquo; Health Check</small>
        @php
            $configKey = 'health_apikey';
        @endphp
        {!! Form::text("config[$configKey]", null, array('placeholder' => 'Health Token', 'id' => $configKey, 'class' => 'form-control config-item', 'data-config' => $configKey)) !!}
    </div>
    <div class="input">
        <label>Private API-Read Token</label>
        <small>User Settings &raquo; Access Tokens</small>
        @php
            $configKey = 'private_apikey';
        @endphp
        {!! Form::text("config[$configKey]", null, array('placeholder' => __('app.apps.apikey'), 'id' => $configKey, 'class' => 'form-control config-item', 'data-config' => $configKey)) !!}
    </div>
    <div class="input">
        <button style="margin-top: 32px;" class="btn test" id="test_config">Test</button>
    </div>
</div>

