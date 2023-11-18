<div>

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; {{ date("Y") }} <strong>{{ company_config('company') ?? config('app.name') }} </strong>
        </div>
        <div class="footer-right">
            v.{{ config('pln.version') }}
        </div>
    </footer>
</div>