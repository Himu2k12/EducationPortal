@extends('Backend.master')

@section('title')
    Student Portal
@endsection
@section('style')
<style>


    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: white;
        width: 100%;
        height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: #858796;
        padding: 16px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: center;
        cursor: pointer;
        transition: 0.3s;
        font-size: 16px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
    }
</style>
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 style="text-align: center" class="m-0 font-weight-bold text-primary">Welcome To ApplyExpert!</h4>
                <h6 style="text-align: center" class="text-success">{{\Illuminate\Support\Facades\Auth::user()->name}}</h6>
                <h6 style="text-align: center" class="text-success">{{\Illuminate\Support\Facades\Auth::user()->id}}</h6>
            </div>
        </div>
        <!-- DataTales Example -->


    </div>
    <!-- /.container-fluid -->

    <main>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="row" style="overflow:scroll">
                <div class="col-lg-3 sticky-top">
                    <div class="sticky-top">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab">
                                    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')"><i style="margin-left: 20%;color: darkblue" class="fa-li fa fa-spinner fa-spin"></i>Basic Information</button>
                                    <button class="tablinks" onclick="openCity(event, 'Paris')"><i style="margin-left: 20%;color: darkblue" class="fa-li fa fa-spinner fa-spin"></i> Test Score </button>
                                    <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i style="margin-left: 20%;color: darkblue" class="fa-li fa fa-spinner fa-spin"></i> Education Background</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9" >
                    <!-- Default Bootstrap Form Controls-->
                    <div id="London" class="tabcontent">
                        <div class="card mb-4">
                            <div class="card-header info"><h4>Personal Details</h4></div>
                            <div class="card-body">
                                <!-- Component Preview-->
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <form action="{{url('/submit-personal-information')}}" method="post">
                                            <div class="row">
                                            <div class="mb-3 col-sm-6">
                                                <label for="exampleFormControlInput1">Full Name</label>
                                                <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Ex: Davin Smith" />
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <label for="exampleFormControlSelect1">Country of Origin</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-sm-6">
                                                    <label for="exampleFormControlInput1">Date of Birth</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="date"  />
                                                </div>
                                                <div class="mb-3 col-sm-6">
                                                    <label for="exampleFormControlSelect1">Passport Number</label>
                                                    <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="mb-3 col-sm-6">
                                                <label for="exampleFormControlSelect2">Gender</label>
                                                <div class="sbp-preview-content">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexRadioDefault1" type="radio" checked="" name="flexRadioDefault" />
                                                        <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  />
                                                        <label class="form-check-label" for="flexRadioDefault2">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <label for="">Marital Status</label>
                                                <div class="sbp-preview-content">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexRadioMS1" type="radio" checked="" name="flexRadioMS1" />
                                                        <label class="form-check-label" for="flexRadioMS1">Single</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexRadioMS2" type="radio" name="flexRadioMS1"  />
                                                        <label class="form-check-label" for="flexRadioMS2">Married</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="flexRadioMS3" type="radio" name="flexRadioMS1"  />
                                                        <label class="form-check-label" for="flexRadioMS3">Divorced</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="mb-0" >
                                                <button type="submit" class="form-control btn btn-success"> Submit </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Solid Form Controls-->
                    <div id="Paris" class="tabcontent">
                        <div class="card mb-4">
                            <div class="card-header">Custom Solid Form Controls</div>
                            <div class="card-body">
                                <!-- Component Preview-->
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1">Email address</label>
                                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="name@example.com" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1">Example select</label>
                                                <select class="form-control form-control-solid" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                                <select class="form-control form-control-solid" id="exampleFormControlSelect2" multiple="">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="mb-0">
                                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                                <textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="sbp-preview-code">
                                        <!-- Code sample-->
                                        <ul class="nav nav-tabs" id="formsSolidTabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active me-1" id="formsSolidHtmlTab" data-bs-toggle="tab" href="#formsSolidHtml" role="tab" aria-controls="formsSolidHtml" aria-selected="true">
                                                    <i class="fab fa-html5 text-orange me-1"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="formsSolidPugTab" data-bs-toggle="tab" href="#formsSolidPug" role="tab" aria-controls="formsSolidPug" aria-selected="false">
                                                    <img class="img-pug me-1" src="assets/img/demo/pug.svg" />
                                                    PUG
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="formsSolidHtml" role="tabpanel" aria-labelledby="formsSolidHtmlTab">
                                                            <pre class="language-markup"><code><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/plain"><form>
    <div class="mb-3"><label for="exampleFormControlInput1">Email address</label><input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="name@example.com"></div>
    <div class="mb-3">
        <label for="exampleFormControlSelect1">Example select</label><select class="form-control form-control-solid" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlSelect2">Example multiple select</label><select class="form-control form-control-solid" id="exampleFormControlSelect2" multiple="">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="mb-0"><label for="exampleFormControlTextarea1">Example textarea</label><textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea></div>
</form></script></code></pre>
                                            </div>
                                            <div class="tab-pane" id="formsSolidPug" role="tabpanel" aria-labelledby="formsSolidPugTab">
                                                            <pre class="language-pug"><code>form
    .mb-3
        label(for='exampleFormControlInput1') Email address
        input#exampleFormControlInput1.form-control.form-control-solid(type='email', placeholder='<a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="4d232c20280d28352c203d2128632e2220">[email&#160;protected]</a>')
    .mb-3
        label(for='exampleFormControlSelect1') Example select
        select#exampleFormControlSelect1.form-control.form-control-solid
            option 1
            option 2
            option 3
            option 4
            option 5
    .mb-3
        label(for='exampleFormControlSelect2') Example multiple select
        select#exampleFormControlSelect2.form-control.form-control-solid(multiple='')
            option 1
            option 2
            option 3
            option 4
            option 5
    .mb-0
        label(for='exampleFormControlTextarea1') Example textarea
        textarea#exampleFormControlTextarea1.form-control.form-control-solid(rows='3')
</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-text">
                                        Custom solid form controls have been developed as an alternative to the default form styling. Use them by appending the
                                        <code>.form-control-solid</code>
                                        to the normal
                                        <code>.form-control</code>
                                        class.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Custom Checkboxes and Radio-->
                    <div id="Tokyo" class="tabcontent">
                        <div class="card mb-4">
                            <div class="card-header">Custom Checkboxes &amp; Radio</div>
                            <div class="card-body">
                                <h6 class="small text-muted fw-500">Bootstrap Custom Checkboxes:</h6>
                                <div class="sbp-preview mb-4">
                                    <div class="sbp-preview-content">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" checked="" />
                                            <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexCheckDisabled" type="checkbox" value="" disabled="" />
                                            <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-code">
                                        <!-- Code sample-->
                                        <ul class="nav nav-tabs" id="formsCheckboxesTabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active me-1" id="formsCheckboxesHtmlTab" data-bs-toggle="tab" href="#formsCheckboxesHtml" role="tab" aria-controls="formsCheckboxesHtml" aria-selected="true">
                                                    <i class="fab fa-html5 text-orange me-1"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="formsCheckboxesPugTab" data-bs-toggle="tab" href="#formsCheckboxesPug" role="tab" aria-controls="formsCheckboxesPug" aria-selected="false">
                                                    <img class="img-pug me-1" src="assets/img/demo/pug.svg" />
                                                    PUG
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="formsCheckboxesHtml" role="tabpanel" aria-labelledby="formsCheckboxesHtmlTab">
                                                            <pre class="language-markup"><code><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/plain"><div class="form-check">
    <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
</div>
<div class="form-check">
    <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" checked">
    <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
</div>
<div class="form-check">
    <input class="form-check-input" id="flexCheckDisabled" type="checkbox" value="" disabled>
    <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
</div></script></code></pre>
                                            </div>
                                            <div class="tab-pane" id="formsCheckboxesPug" role="tabpanel" aria-labelledby="formsCheckboxesPugTab">
                                                            <pre class="language-pug"><code>.form-check
    input#flexCheckDefault.form-check-input(type='checkbox', value='')
    label.form-check-label(for='flexCheckDefault')
        | Default checkbox
.form-check
    input#flexCheckChecked.form-check-input(type='checkbox', value='', checked)
    label.form-check-label(for='flexCheckChecked')
        | Checked checkbox
.form-check
    input#flexCheckDisabled.form-check-input(type='checkbox', value='', disabled)
    label.form-check-label(for='flexCheckDisabled')
        | Disabled checkbox</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-text">Bootstrap's custom checkbox styling has been modified for the SB Admin Pro theme.</div>
                                </div>
                                <h6 class="small text-muted fw-500">Bootstrap Custom Radio:</h6>
                                <!-- Component Preview-->
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" />
                                            <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="" />
                                            <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="flexRadioDefault3" type="radio" name="flexRadioDefault" disabled="" />
                                            <label class="form-check-label" for="flexRadioDefault3">Default disabled radio</label>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-code">
                                        <!-- Code sample-->
                                        <ul class="nav nav-tabs" id="formsRadioTabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active me-1" id="formsRadioHtmlTab" data-bs-toggle="tab" href="#formsRadioHtml" role="tab" aria-controls="formsRadioHtml" aria-selected="true">
                                                    <i class="fab fa-html5 text-orange me-1"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="formsRadioPugTab" data-bs-toggle="tab" href="#formsRadioPug" role="tab" aria-controls="formsRadioPug" aria-selected="false">
                                                    <img class="img-pug me-1" src="assets/img/demo/pug.svg" />
                                                    PUG
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="formsRadioHtml" role="tabpanel" aria-labelledby="formsRadioHtmlTab">
                                                            <pre class="language-markup"><code><script type="text/plain"><div class="form-check">
    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
    <label class="form-check-label" for="flexRadioDefault1">Default radio</label>
</div>
<div class="form-check">
    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked">
    <label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
</div>
<div class="form-check">
    <input class="form-check-input" id="flexRadioDefault3" type="radio" name="flexRadioDefault" disabled>
    <label class="form-check-label" for="flexRadioDefault3">Default disabled radio</label>
</div></script></code></pre>
                                            </div>
                                            <div class="tab-pane" id="formsRadioPug" role="tabpanel" aria-labelledby="formsRadioPugTab">
                                                            <pre class="language-pug"><code>.form-check
    input#flexRadioDefault1.form-check-input(type='radio', name='flexRadioDefault')
    label.form-check-label(for='flexRadioDefault1')
        | Default radio
.form-check
    input#flexRadioDefault2.form-check-input(type='radio', name='flexRadioDefault', checked)
    label.form-check-label(for='flexRadioDefault2')
        | Default checked radio
.form-check
    input#flexRadioDefault3.form-check-input(type='radio', name='flexRadioDefault', disabled)
    label.form-check-label(for='flexRadioDefault3')
        | Default disabled radio</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-text">Bootstrap's custom radio styling has also been modified for the SB Admin Pro theme.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Solid Checkbox and Radio Styling-->
                    <div id="Lodon" class="tabcontent">
                        <div class="card mb-4">
                            <div class="card-header">Solid Checkboxes &amp; Radio</div>
                            <div class="card-body">
                                <h6 class="small text-muted fw-500">Custom Solid Checkboxes:</h6>
                                <div class="sbp-preview mb-4">
                                    <div class="sbp-preview-content">
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexCheckSolidDefault" type="checkbox" value="" />
                                            <label class="form-check-label" for="flexCheckSolidDefault">Default checkbox</label>
                                        </div>
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexCheckSolidChecked" type="checkbox" value="" checked="" />
                                            <label class="form-check-label" for="flexCheckSolidChecked">Checked checkbox</label>
                                        </div>
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexCheckSolidDisabled" type="checkbox" value="" disabled="" />
                                            <label class="form-check-label" for="flexCheckSolidDisabled">Disabled checkbox</label>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-code">
                                        <!-- Code sample-->
                                        <ul class="nav nav-tabs" id="formsCheckboxesSolidTabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active me-1" id="formsCheckboxesSolidHtmlTab" data-bs-toggle="tab" href="#formsCheckboxesSolidHtml" role="tab" aria-controls="formsCheckboxesSolidHtml" aria-selected="true">
                                                    <i class="fab fa-html5 text-orange me-1"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="formsCheckboxesSolidPugTab" data-bs-toggle="tab" href="#formsCheckboxesSolidPug" role="tab" aria-controls="formsCheckboxesSolidPug" aria-selected="false">
                                                    <img class="img-pug me-1" src="assets/img/demo/pug.svg" />
                                                    PUG
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="formsCheckboxesSolidHtml" role="tabpanel" aria-labelledby="formsCheckboxesSolidHtmlTab">
                                                            <pre class="language-markup"><code><script type="text/plain"><div class="form-check form-check-solid">
    <input class="form-check-input" id="flexCheckSolidDefault" type="checkbox" value="">
    <label class="form-check-label" for="flexCheckSolidDefault">Default checkbox</label>
</div>
<div class="form-check form-check-solid">
    <input class="form-check-input" id="flexCheckSolidChecked" type="checkbox" value="" checked">
    <label class="form-check-label" for="flexCheckSolidChecked">Checked checkbox</label>
</div>
<div class="form-check form-check-solid">
    <input class="form-check-input" id="flexCheckSolidDisabled" type="checkbox" value="" disabled>
    <label class="form-check-label" for="flexCheckSolidDisabled">Disabled checkbox</label>
</div></script></code></pre>
                                            </div>
                                            <div class="tab-pane" id="formsCheckboxesSolidPug" role="tabpanel" aria-labelledby="formsCheckboxesSolidPugTab">
                                                            <pre class="language-pug"><code>.form-check.form-check-solid
    input#flexCheckSolidDefault.form-check-input(type='checkbox', value='')
    label.form-check-label(for='flexCheckSolidDefault')
        | Default checkbox
.form-check.form-check-solid
    input#flexCheckSolidChecked.form-check-input(type='checkbox', value='', checked)
    label.form-check-label(for='flexCheckSolidChecked')
        | Checked checkbox
.form-check.form-check-solid
    input#flexCheckSolidDisabled.form-check-input(type='checkbox', value='', disabled)
    label.form-check-label(for='flexCheckSolidDisabled')
        | Disabled checkbox</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-text">
                                        The
                                        <code>.custom-control-solid</code>
                                        can be used with a
                                        <code>.custom-control</code>
                                        class to get a solid styling for custom checkboxes.
                                    </div>
                                </div>
                                <h6 class="small text-muted fw-500">Custom Solid Radio:</h6>
                                <!-- Component Preview-->
                                <div class="sbp-preview">
                                    <div class="sbp-preview-content">
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexRadioSolid1" type="radio" name="flexRadioSolid" />
                                            <label class="form-check-label" for="flexRadioSolid1">Default radio</label>
                                        </div>
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexRadioSolid2" type="radio" name="flexRadioSolid" checked="" />
                                            <label class="form-check-label" for="flexRadioSolid2">Default checked radio</label>
                                        </div>
                                        <div class="form-check form-check-solid">
                                            <input class="form-check-input" id="flexRadioSolid3" type="radio" name="flexRadioSolid" disabled="" />
                                            <label class="form-check-label" for="flexRadioSolid3">Default disabled radio</label>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-code">
                                        <!-- Code sample-->
                                        <ul class="nav nav-tabs" id="formsRadioSolidTabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active me-1" id="formsRadioSolidHtmlTab" data-bs-toggle="tab" href="#formsRadioSolidHtml" role="tab" aria-controls="formsRadioSolidHtml" aria-selected="true">
                                                    <i class="fab fa-html5 text-orange me-1"></i>
                                                    HTML
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="formsRadioSolidPugTab" data-bs-toggle="tab" href="#formsRadioSolidPug" role="tab" aria-controls="formsRadioSolidPug" aria-selected="false">
                                                    <img class="img-pug me-1" src="assets/img/demo/pug.svg" />
                                                    PUG
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="formsRadioSolidHtml" role="tabpanel" aria-labelledby="formsRadioSolidHtmlTab">
                                                            <pre class="language-markup"><code><script type="text/plain"><div class="form-check form-check-solid">
    <input class="form-check-input" id="flexRadioSolid1" type="radio" name="flexRadioSolid">
    <label class="form-check-label" for="flexRadioSolid1">Default radio</label>
</div>
<div class="form-check form-check-solid">
    <input class="form-check-input" id="flexRadioSolid2" type="radio" name="flexRadioSolid" checked">
    <label class="form-check-label" for="flexRadioSolid2">Default checked radio</label>
</div>
<div class="form-check form-check-solid">
    <input class="form-check-input" id="flexRadioSolid3" type="radio" name="flexRadioSolid" disabled>
    <label class="form-check-label" for="flexRadioSolid3">Default disabled radio</label>
</div></script></code></pre>
                                            </div>
                                            <div class="tab-pane" id="formsRadioSolidPug" role="tabpanel" aria-labelledby="formsRadioSolidPugTab">
                                                            <pre class="language-pug"><code>.form-check.form-check-solid
    input#flexRadioSolid1.form-check-input(type='radio', name='flexRadioSolid')
    label.form-check-label(for='flexRadioSolid1')
        | Default radio
.form-check.form-check-solid
    input#flexRadioSolid2.form-check-input(type='radio', name='flexRadioSolid', checked)
    label.form-check-label(for='flexRadioSolid2')
        | Default checked radio
.form-check.form-check-solid
    input#flexRadioSolid3.form-check-input(type='radio', name='flexRadioSolid', disabled)
    label.form-check-label(for='flexRadioSolid3')
        | Default disabled radio</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sbp-preview-text">
                                        The
                                        <code>.custom-control-solid</code>
                                        works with custom radios as well.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Joined Input Groups-->
                </div>
                <!-- Sticky Navigation-->
            </div>
        </div>
    </main>


@endsection

