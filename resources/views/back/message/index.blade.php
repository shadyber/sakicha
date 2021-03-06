@extends('layouts.back_master')
@section('title', 'Message')
@section('subtitle', 'Inbox')
@section('content')
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">
                        <span class="sidebar-close-icon">
                            <i class="feather icon-x"></i>
                        </span>
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose text-center compose-btn">
                            <button type="button" class="btn btn-primary btn-block my-2 waves-effect waves-light" data-toggle="modal" data-target="#composeForm"><i class="feather icon-edit"></i> Compose</button>
                        </div>
                        <div class="sidebar-menu-list ps ps--active-y">
                            <div class="list-group list-group-messages font-medium-1">
                                <a href="#" class="list-group-item list-group-item-action border-0 pt-0">
                                    <i class="font-medium-5 feather icon-mail mr-50"></i> Inbox <span class="badge badge-primary badge-pill float-right">3</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 fa fa-paper-plane-o mr-50"></i> Sent</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-edit-2 mr-50"></i> Draft <span class="badge badge-warning badge-pill float-right">4</span> </a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i>
                                    Starred</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i>
                                    Spam <span class="badge badge-danger badge-pill float-right">3</span> </a>
                                <a href="#" class="list-group-item list-group-item-action border-0 active"><i class="font-medium-5 feather icon-trash mr-50"></i>
                                    Trash</a>
                            </div>
                            <hr>
                            <h5 class="my-2 pt-25">Labels</h5>
                            <div class="list-group list-group-labels font-medium-1">
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> Personal</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Company</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Important</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> Private</a>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 386px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 290px;"></div></div></div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade text-left" id="composeForm" tabindex="-1" role="dialog" aria-labelledby="emailCompose" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-text-bold-600" id="emailCompose">New Message</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body pt-1 ps">
                                <div class="form-label-group mt-1">
                                    <input type="text" id="emailTo" class="form-control" placeholder="To" name="fname-floating">
                                    <label for="emailTo">To</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="fname-floating">
                                    <label for="emailSubject">Subject</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="emailCC" class="form-control" placeholder="CC" name="fname-floating">
                                    <label for="emailCC">CC</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" id="emailBCC" class="form-control" placeholder="BCC" name="fname-floating">
                                    <label for="emailBCC">BCC</label>
                                </div>
                                <div id="email-container">
                                    <div class="ql-toolbar ql-snow"><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button><button type="button" class="ql-strike"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button><button type="button" class="ql-blockquote"><svg viewBox="0 0 18 18"> <rect class="ql-fill ql-stroke" height="3" width="3" x="4" y="5"></rect> <rect class="ql-fill ql-stroke" height="3" width="3" x="11" y="5"></rect> <path class="ql-even ql-fill ql-stroke" d="M7,8c0,4.031-3,5-3,5"></path> <path class="ql-even ql-fill ql-stroke" d="M14,8c0,4.031-3,5-3,5"></path> </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline> <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button><button type="button" class="ql-header" value="1"><svg viewBox="0 0 18 18"> <path class="ql-fill" d="M10,4V14a1,1,0,0,1-2,0V10H3v4a1,1,0,0,1-2,0V4A1,1,0,0,1,3,4V8H8V4a1,1,0,0,1,2,0Zm6.06787,9.209H14.98975V7.59863a.54085.54085,0,0,0-.605-.60547h-.62744a1.01119,1.01119,0,0,0-.748.29688L11.645,8.56641a.5435.5435,0,0,0-.022.8584l.28613.30762a.53861.53861,0,0,0,.84717.0332l.09912-.08789a1.2137,1.2137,0,0,0,.2417-.35254h.02246s-.01123.30859-.01123.60547V13.209H12.041a.54085.54085,0,0,0-.605.60547v.43945a.54085.54085,0,0,0,.605.60547h4.02686a.54085.54085,0,0,0,.605-.60547v-.43945A.54085.54085,0,0,0,16.06787,13.209Z"></path> </svg></button><button type="button" class="ql-header" value="2"><svg viewBox="0 0 18 18"> <path class="ql-fill" d="M16.73975,13.81445v.43945a.54085.54085,0,0,1-.605.60547H11.855a.58392.58392,0,0,1-.64893-.60547V14.0127c0-2.90527,3.39941-3.42187,3.39941-4.55469a.77675.77675,0,0,0-.84717-.78125,1.17684,1.17684,0,0,0-.83594.38477c-.2749.26367-.561.374-.85791.13184l-.4292-.34082c-.30811-.24219-.38525-.51758-.1543-.81445a2.97155,2.97155,0,0,1,2.45361-1.17676,2.45393,2.45393,0,0,1,2.68408,2.40918c0,2.45312-3.1792,2.92676-3.27832,3.93848h2.79443A.54085.54085,0,0,1,16.73975,13.81445ZM9,3A.99974.99974,0,0,0,8,4V8H3V4A1,1,0,0,0,1,4V14a1,1,0,0,0,2,0V10H8v4a1,1,0,0,0,2,0V4A.99974.99974,0,0,0,9,3Z"></path> </svg></button><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span><span class="ql-formats"><span class="ql-font ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="serif"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="monospace"></span></span></span><select class="ql-font" style="display: none;"><option selected="selected"></option><option value="serif"></option><option value="monospace"></option></select></span></div><div class="editor ql-container ql-snow" data-placeholder="Message"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Message"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="emailAttach">
                                        <label class="custom-file-label" for="emailAttach">Attach file</label>
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                            <div class="modal-footer">
                                <i class="btn btn-primary waves-input-wrapper waves-effect waves-light" style="color:rgb(255, 255, 255);background:rgba(0, 0, 0, 0)"><input type="submit" value="Send" class="waves-button-input" style="background-color:rgba(0,0,0,0);"></i>
                                <i class="btn btn-white waves-input-wrapper waves-effect waves-light" style="color:rgb(98, 98, 98);background:rgba(0, 0, 0, 0)"><input type="Reset" value="Cancel" class="waves-button-input" data-dismiss="modal" style="background-color:rgba(0,0,0,0);"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="app-content-overlay"></div>
                    <div class="email-app-area">
                        <!-- Email list Area -->
                        <div class="email-app-list-wrapper">
                            <div class="email-app-list">
                                <div class="app-fixed-search">
                                    <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                        <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                        <div class="form-control-position">
                                            <i class="feather icon-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="app-action">
                                    <div class="action-left">
                                        <div class="vs-checkbox-con selectAll">
                                            <input type="checkbox">
                                            <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-minus"></i>
                                                    </span>
                                                </span>
                                            <span>Select All</span>
                                        </div>
                                    </div>
                                    <div class="action-right">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-folder"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                                        <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="feather icon-tag"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                        <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item mail-unread"><span class="action-icon"><i class="feather icon-mail"></i></span></li>
                                            <li class="list-inline-item mail-delete"><span class="action-icon"><i class="feather icon-trash"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="email-user-list list-group ps ps--active-y">
                                    <ul class="users-list-wrapper media-list">
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="avtar img holder">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Tonny Deep</h5>
                                                        <span class="list-group-item-text text-truncate">Focused impactful open system</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-success bullet-sm"></span><span class="mail-date">4:14 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text truncate mb-0">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Louis Welch </h5>
                                                        <span class="list-group-item-text text-truncate">Thanks, Let's do it.</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly. </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Envato Market</h5>
                                                        <span class="list-group-item-text text-truncate">You have new comment...</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears. Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate bar lemon drops.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Sarah Montgomery </h5>
                                                        <span class="list-group-item-text text-truncate">Your New UI.</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mr-1 bullet bullet-warning bullet-sm"></span><span class="mail-date">Yesterday</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text text-truncate mb-0">Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate jelly-o topping marzipan fruitcake.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Ardis Balderson</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Focused impactful open system</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <i class="fa-paperclip fa"></i> <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">15 July</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Modestine Spat</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Profound systemic alliance 🎉</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">11 July</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus anterolateral infirmate Nahani Hyla barile farthing</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Eb Begg</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Organized value-added model</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">1 July</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Waldemar Mannering</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Quality-focused methodical flexibility</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">19 Jun</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Louetta Esses</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Company Report</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">2 Jun</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Tressa Gass</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Theme Update</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">29 May</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate"> Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie roll chocolate I love. Tootsie roll pie marzipan sesame snaps.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Tommy Sicilia</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">17 May</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media mail-read">
                                            <div class="media-left pr-50">
                                                <div class="avatar">
                                                    <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.jpg" alt="Generic placeholder image">
                                                </div>
                                                <div class="user-action">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                    </div>
                                                    <span class="favorite"><i class="feather icon-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="user-details">
                                                    <div class="mail-items">
                                                        <h5 class="list-group-item-heading text-bold-600 mb-25">Heather Howell</h5>
                                                        <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                                    </div>
                                                    <div class="mail-meta-item">
                                                            <span class="float-right">
                                                                <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">21 Mar</span>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="mail-message">
                                                    <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie. Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="no-results">
                                        <h5>No Items Found</h5>
                                    </div>
                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 381px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 102px;"></div></div></div>
                            </div>
                        </div>
                        <!--/ Email list Area -->
                        <!-- Detailed Email View -->
                        <div class="email-app-details">
                            <div class="email-detail-header">
                                <div class="email-header-left d-flex align-items-center mb-1">
                                    <span class="go-back mr-1"><i class="feather icon-arrow-left font-medium-4"></i></span>
                                    <h3>Focused impactful open system 📷 😃</h3>
                                </div>
                                <div class="email-header-right mb-1 ml-2 pl-1">
                                    <ul class="list-inline m-0">
                                        <li class="list-inline-item"><span class="action-icon favorite"><i class="feather icon-star font-medium-5"></i></span></li>
                                        <li class="list-inline-item">
                                            <div class="dropdown no-arrow">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="feather icon-folder font-medium-5"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown no-arrow">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="feather icon-tag font-medium-5"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                    <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                                    <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                                    <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                                    <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item"><span class="action-icon"><i class="feather icon-mail font-medium-5"></i></span></li>
                                        <li class="list-inline-item"><span class="action-icon"><i class="feather icon-trash font-medium-5"></i></span></li>
                                        <li class="list-inline-item email-prev"><span class="action-icon"><i class="feather icon-chevrons-left font-medium-5"></i></span></li>
                                        <li class="list-inline-item email-next"><span class="action-icon"><i class="feather icon-chevrons-right font-medium-5"></i></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="email-scroll-area ps ps--active-y">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="email-label ml-2 my-2 pl-1">
                                            <span class="mr-1 bullet bullet-primary bullet-sm"></span><small class="mail-label">Company</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card px-1">
                                            <div class="card-header email-detail-head ml-75">
                                                <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="avatar mr-75">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="61" height="61">
                                                    </div>
                                                    <div class="mail-items">
                                                        <h4 class="list-group-item-heading mb-0">Ardis Balderson</h4>
                                                        <div class="email-info-dropup dropdown">
                                                                <span class="dropdown-toggle font-small-3" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    abaldersong@utexas.edu
                                                                </span>
                                                            <div class="dropdown-menu dropdown-menu-right p-50" aria-labelledby="dropdownMenuButton200">
                                                                <div class="px-25 dropdown-item">From: <strong> abaldersong@utexas.edu </strong></div>
                                                                <div class="px-25 dropdown-item">To: <strong> johndoe@ow.ly </strong></div>
                                                                <div class="px-25 dropdown-item">Date: <strong> 4:25 AM 13 Jan 2018 </strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <div class="mail-time mb-1">4:14 AM</div>
                                                    <div class="mail-date">17 May 2018</div>
                                                </div>
                                            </div>
                                            <div class="card-body mail-message-wrapper pt-2 mb-0">
                                                <div class="mail-message">
                                                    <p>Hey John,</p>
                                                    <p>bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto Chelonia</p>
                                                    <p>Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                                                </div>
                                                <div class="mail-attachements d-flex">
                                                    <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                    <span>Attachments</span>
                                                </div>
                                            </div>
                                            <div class="mail-files py-2">
                                                <div class="chip chip-primary">
                                                    <div class="chip-body py-50">
                                                        <span class="chip-text">interdum.docx</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <span class="font-medium-1">Click here to <span class="primary cursor-pointer"><strong>Reply</strong></span> or <span class="primary  cursor-pointer"><strong>Forward</strong></span></span>
                                                    <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 403px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 252px;"></div></div></div>
                        </div>
                        <!--/ Detailed Email View -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" col-lg-12 col-md-12 col-sm-12 border-left-primary">


            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">All Messages</h6>

                @foreach($messages as $message)
                    <a href="/message/{{$message->id}}" >
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">{{$message->email}}</strong>


                                @if(!$message->status==0)
                                    <strong class="text-gray-300">
                                        @endif
                                        {{$message->message}}

                                        @if(!$message->status==0)
                                    </strong>
                                @endif
                            </p>
                        </div>
                    </a>
                @endforeach



                <small class="d-block text-right mt-3">
                    <a href="#">More Messages</a>
                </small>
            </div>




@endsection
