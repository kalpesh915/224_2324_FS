<?php
require_once("classes/Data.class.php");
?>
<div class="col-xxl-3 col-md-6">
    <a href="pendingcomment">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h5 class="card-title">Comments <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-chat"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->newCommentsCount(); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="viewblogs">
            <div class="card-body">
                <h5 class="card-title">Blogs <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-menu-button-wide"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countBlogs(); ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="category">
            <div class="card-body">
                <h5 class="card-title">Category <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-list"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countCategory(); ?></h6>
                    </div>
                </div>

            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="users">
            <div class="card-body">
                <h5 class="card-title">Users <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countUsers(); ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="unreadmessages">
            <div class="card-body">
                <h5 class="card-title">Messages<span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-chat-left-text"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->newMessagesCount(); ?></h6>
                        <span class="text-muted small pt-2 ps-1">New Message</span>

                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="services">
            <div class="card-body">
                <h5 class="card-title">Services<span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-box"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countServices(); ?></h6>
                    </div>
                </div>
        </a>
    </div>
</div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="teams">
            <div class="card-body">
                <h5 class="card-title">Team <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countTeams(); ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="slider">
            <div class="card-body">
                <h5 class="card-title">Slider <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-image"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countSlider(); ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="faq">
            <div class="card-body">
                <h5 class="card-title">FAQ <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-question-circle"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countFAQ(); ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="backup">
            <div class="card-body">
                <h5 class="card-title">Backup <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-hdd"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?php
                            $files = scandir("dbbackups/");
                            echo  $count = count($files) - 2;
                            ?></h6>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="col-xxl-3 col-md-6">
    <div class="card info-card sales-card">
        <a href="logs">
            <div class="card-body">
                <h5 class="card-title">Logs <span></span></h5>

                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-bell"></i>
                    </div>
                    <div class="ps-3">
                        <h6><?= $data->countLogs(); ?></h6>
                    </div>
                </div>
            </div>
    </div>
</div>