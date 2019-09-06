<script  src="{{ url('assets/js/email-decode.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/jquery/js/jquery.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/popper.js/js/popper.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script  src="{{ url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script  src="{{ url('assets/bower_components/modernizr/js/modernizr.js') }}"></script>
<script  src="{{ url('assets/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

<!--<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}" ></script>-->
<!--<script src="{{ url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" ></script>-->


<script  src="{{ url('assets/bower_components/chart.js/js/chart.js') }}"></script>

<script  src="{{ url('assets/bower_components/i18next/js/i18next.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
<script  src="{{ url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>

<script src="{{ url('assets/pages/data-table/extensions/responsive/js/responsive-custom.js') }}" ></script>

<script src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js') }}" ></script>
<script  src="{{ url('assets/js/script.js') }}"></script>
<script  src="{{ url('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ url('assets/js/pcoded.min.js') }}" ></script>

<script src="{{ url('assets/js/vartical-layout.min.js') }}"></script>
<script  src="{{ url('assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script  src="{{ url('assets/js/script.min.js') }}"></script>

<script src="{{ url('assets/js/rocket-loader.min.js') }}" ></script>
    @if (!empty($pluginjs)) 
    @foreach ($pluginjs as $value) 
        <script src="{{ url('assets/bower_components/datatables.net/'.$value) }}" type="text/javascript"></script>
    @endforeach
    @endif
    
    @if(!@empty($js))
    @foreach($js as $value)
              <script src="{{ url('js/'.$value) }}" type="text/javascript"></script>
      @endforeach
    @endif  
    <script>
        jQuery(document).ready(function() {

            @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{ $value }}
                @endforeach
            @endif
        });
    </script>