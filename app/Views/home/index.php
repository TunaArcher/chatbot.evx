<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Page Title -->
    <title>ChatBot | ConnectMe | Chat Application HTML Template</title>
    <!-- Page Stylesheets -->
    <link rel="stylesheet" href="./assets/css/bundle.css?v1310">
    <link rel="stylesheet" href="./assets/css/app.css?v1310">
</head>

<body class="tyn-body">
    <div class="tyn-root">
        <nav class="tyn-appbar">
            <div class="tyn-appbar-wrap">
                <div class="tyn-appbar-logo">
                    <a class="tyn-logo" href="index.html">
                        <svg viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.2654 14.793C37.2654 14.793 45.0771 20.3653 41.9525 29.5311C41.9525 29.5311 41.3796 31.1976 39.0361 34.4264L42.4732 37.9677C42.4732 37.9677 43.3065 39.478 41.5879 39.9987H24.9229C24.9229 39.9987 19.611 40.155 14.8198 36.9782C14.8198 36.9782 12.1638 35.2076 9.76825 31.9787L18.6215 32.0308C18.6215 32.0308 24.298 31.9787 29.7662 28.3333C35.2344 24.6878 37.4217 18.6988 37.2654 14.793Z" fill="#60A5FA" />
                            <path d="M34.5053 12.814C32.2659 1.04441 19.3506 0.0549276 19.3506 0.0549276C8.31004 -0.674164 3.31055 6.09597 3.31055 6.09597C-4.24076 15.2617 3.6751 23.6983 3.6751 23.6983C3.6751 23.6983 2.99808 24.6357 0.862884 26.5105C-1.27231 28.3854 1.22743 29.3748 1.22743 29.3748H17.3404C23.4543 28.7499 25.9124 27.3959 25.9124 27.3959C36.328 22.0318 34.5053 12.814 34.5053 12.814ZM19.9963 18.7301H9.16412C8.41419 18.7301 7.81009 18.126 7.81009 17.3761C7.81009 16.6261 8.41419 16.022 9.16412 16.022H19.9963C20.7463 16.022 21.3504 16.6261 21.3504 17.3761C21.3504 18.126 20.7358 18.7301 19.9963 18.7301ZM25.3708 13.314H9.12245C8.37253 13.314 7.76843 12.7099 7.76843 11.96C7.76843 11.21 8.37253 10.6059 9.12245 10.6059H25.3708C26.1207 10.6059 26.7248 11.21 26.7248 11.96C26.7248 12.7099 26.1103 13.314 25.3708 13.314Z" fill="#2563EB" />
                        </svg>
                    </a>
                </div><!-- .tyn-appbar-logo -->
                <div class="tyn-appbar-content">
                    <ul class="tyn-appbar-nav tyn-appbar-nav-start">
                        <li class="tyn-appbar-item">
                            <a class="tyn-appbar-link" href="index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                                </svg><!-- chat-text-fill -->
                                <span class="d-none">Chats</span>
                            </a>
                        </li><!-- .tyn-appbar-item -->
                    </ul><!-- .tyn-appbar-nav -->
                    <ul class="tyn-appbar-nav tyn-appbar-nav-end">
                        <li class="tyn-appbar-item">
                            <a class="d-inline-flex dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown" href="#" data-bs-offset="0,10">
                                <div class="tyn-media tyn-size-lg tyn-circle">
                                    <img src="images/avatar/3.jpg" alt="">
                                </div>
                            </a><!-- .dropdown-toggle -->
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-gap"> dropdown content </div><!-- .dropdown-gap -->
                            </div><!-- .dropdown-menu -->
                        </li><!-- .tyn-appbar-item -->
                    </ul><!-- .tyn-appbar-nav -->
                </div><!-- .tyn-appbar-content -->
            </div><!-- .tyn-appbar-wrap -->
        </nav><!-- .tyn-appbar -->
        <div class="tyn-content tyn-content-full-height tyn-chatbot tyn-chatbot-page has-aside-base">
            <div class="tyn-aside tyn-aside-base">
                <div class="tyn-aside-head">
                    <div class="tyn-aside-head-text">
                        <h3 class="tyn-aside-title tyn-title">Chat Archive</h3>
                        <span class="tyn-subtext">200+ Conversations </span>
                    </div><!-- .tyn-aside-head-text -->
                    <div class="tyn-aside-head-tools">
                        <ul class="tyn-list-inline gap gap-3">
                            <li><a class="btn btn-icon btn-light btn-md btn-pill" href="chat-bot-welcome.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg><!-- plus-lg -->
                                </a></li>
                        </ul>
                    </div><!-- .tyn-aside-head-tools -->
                </div><!-- .tyn-aside-head -->
                <div class="tyn-aside-body" data-simplebar>
                    <ul class="tyn-aside-list">
                        <li class="tyn-aside-item js-toggle-main active">
                            <div class="tyn-media-group">
                                <div class="tyn-media tyn-size-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1m0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1" />
                                    </svg><!-- chat-right-text-fill -->
                                </div>
                                <div class="tyn-media-col">
                                    <div class="content">what can you do for me ?</div>
                                </div>
                            </div><!-- .tyn-media-group -->
                        </li><!-- .tyn-aside-item -->
                    </ul><!-- .tyn-aside-list -->
                </div><!-- .tyn-aside-body -->
            </div><!-- .tyn-aside -->
            <div class="tyn-main" id="tynMain">
                <ul class="tyn-list-inline d-md-none translate-middle-x position-absolute start-50 z-1">
                    <li>
                        <button class="btn btn-icon btn-pill btn-white js-toggle-main">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg><!-- x-lg -->
                        </button>
                    </li>
                </ul><!-- .tyn-list-inline -->
                <div class="tyn-chat-body m-4 rounded-3" data-simplebar>
                    <div class="container px-0">
                        <div class="tyn-qa tyn-qa-bubbly">
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-media tyn-size-md">
                                        <img src="images/avatar/1.jpg" alt="">
                                    </div>
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block"> example question </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                            <div class="tyn-qa-item">
                                <div class="tyn-qa-avatar">
                                    <div class="tyn-qa-avatar-wrap">
                                        <div class="tyn-media tyn-size-md">
                                            <img src="images/avatar/bot-1.jpg" alt="">
                                        </div><!-- .tyn-media -->
                                        <ul class="d-flex flex-column mt-2">
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                                                    </svg><!-- hand-thumbs-up-fill -->
                                                </button>
                                            </li><!-- li -->
                                            <li>
                                                <button class="btn btn-icon btn-md btn-pill btn-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1" />
                                                    </svg><!-- hand-thumbs-down -->
                                                </button>
                                            </li><!-- li -->
                                        </ul><!-- ul -->
                                    </div><!-- .tyn-qa-avatar-wrap -->
                                </div><!-- .tyn-qa-avatar -->
                                <div class="tyn-qa-message tyn-text-block">
                                    <p>example reply </p>
                                </div><!-- .tyn-qa-message -->
                            </div><!-- .tyn-qa-item -->
                        </div><!-- .tyn-qa -->
                    </div><!-- .container -->
                </div><!-- .tyn-chat-body -->
                <div class="tyn-chat-form border-0 px-4">
                    <div class="container px-0">
                        <div class="ps-3 pe-4 py-3 bg-white mb-4 rounded-3">
                            <div class="tyn-chat-form-enter">
                                <div class="tyn-chat-form-input" id="tynChatInput" placeholder="text" contenteditable></div>
                                <ul class="tyn-list-inline me-n2 my-1">
                                    <li><button class="btn btn-icon btn-white btn-md btn-pill">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                            </svg><!-- send-fill -->
                                        </button></li>
                                </ul>
                            </div><!-- .tyn-chat-form-enter -->
                        </div>
                    </div><!-- .container -->
                </div><!-- .tyn-chat-form -->
            </div><!-- .tyn-main -->
        </div><!-- .tyn-content -->
        <div class="tyn-quick-chat" id="tynQuickChat">
            <button class="tyn-quick-chat-toggle js-toggle-quick">
                <svg viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.2654 14.793C37.2654 14.793 45.0771 20.3653 41.9525 29.5311C41.9525 29.5311 41.3796 31.1976 39.0361 34.4264L42.4732 37.9677C42.4732 37.9677 43.3065 39.478 41.5879 39.9987H24.9229C24.9229 39.9987 19.611 40.155 14.8198 36.9782C14.8198 36.9782 12.1638 35.2076 9.76825 31.9787L18.6215 32.0308C18.6215 32.0308 24.298 31.9787 29.7662 28.3333C35.2344 24.6878 37.4217 18.6988 37.2654 14.793Z" fill="#60A5FA" />
                    <path d="M34.5053 12.814C32.2659 1.04441 19.3506 0.0549276 19.3506 0.0549276C8.31004 -0.674164 3.31055 6.09597 3.31055 6.09597C-4.24076 15.2617 3.6751 23.6983 3.6751 23.6983C3.6751 23.6983 2.99808 24.6357 0.862884 26.5105C-1.27231 28.3854 1.22743 29.3748 1.22743 29.3748H17.3404C23.4543 28.7499 25.9124 27.3959 25.9124 27.3959C36.328 22.0318 34.5053 12.814 34.5053 12.814ZM19.9963 18.7301H9.16412C8.41419 18.7301 7.81009 18.126 7.81009 17.3761C7.81009 16.6261 8.41419 16.022 9.16412 16.022H19.9963C20.7463 16.022 21.3504 16.6261 21.3504 17.3761C21.3504 18.126 20.7358 18.7301 19.9963 18.7301ZM25.3708 13.314H9.12245C8.37253 13.314 7.76843 12.7099 7.76843 11.96C7.76843 11.21 8.37253 10.6059 9.12245 10.6059H25.3708C26.1207 10.6059 26.7248 11.21 26.7248 11.96C26.7248 12.7099 26.1103 13.314 25.3708 13.314Z" fill="#2563EB" />
                </svg>
                <span class="badge bg-primary top-0 end-0 position-absolute rounded-pill">2</span>
            </button><!-- .tyn-quick-chat-toggle -->
            <div class="tyn-quick-chat-box">
                <div class="tyn-quick-chat-head">
                    <div class="tyn-media-group">
                        <div class="tyn-media tyn-size-rg">
                            <img src="images/avatar/1.jpg" alt="">
                        </div><!-- .tyn-media -->
                        <div class="tyn-media-col">
                            <div class="tyn-media-row">
                                <h6 class="name">Jasmine Thompson</h6>
                            </div>
                            <div class="tyn-media-row has-dot-sap">
                                <span class="meta">Active</span>
                            </div>
                        </div><!-- .tyn-media-col -->
                    </div><!-- .tyn-media-group -->
                </div><!-- .tyn-quick-chat-head -->
                <div class="tyn-quick-chat-reply js-scroll-to-end">
                    <div class="tyn-reply tyn-reply-quick" id="tynQuickReply"></div><!-- .tyn-reply -->
                </div><!-- .tyn-quick-chat-reply -->
                <div class="tyn-quick-chat-form">
                    <div class="tyn-chat-form-input bg-light" id="tynQuickChatInput" contenteditable></div>
                    <ul class="tyn-list-inline me-n2 my-1">
                        <li><button class="btn btn-icon btn-white btn-sm btn-pill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                </svg><!-- send-fill -->
                            </button></li>
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .tyn-quick-chat-form -->
                <button class="btn btn-danger btn-sm btn-icon top-0 end-0 position-absolute rounded-pill translate-middle js-toggle-quick">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button>
            </div><!-- .tyn-quick-chat-box -->
        </div><!-- .tyn-quick-chat -->
    </div><!-- .tyn-root -->
    <!-- Page Scripts -->
    <script src="./assets/js/bundle.js?v1310"></script>
    <script src="./assets/js/app.js?v1310"></script>
</body>

</html>