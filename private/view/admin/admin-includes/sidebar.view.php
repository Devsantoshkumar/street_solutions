<div class="sidebar">
        <div class="sidebar-content shadow-sm">
            <h5 class="fs-5 p-4 dashboard-logo d-flex align-items-center gap-2 ">
                <span>
                   <img src="<?=ASSETS ?>images/logo.jpg" alt="">
                </span>
                Street Solution
            </h5>
            <ul class="sidebar-menus px-3">
                
                <!-- dashboard tabs -->
                <li class="my-1"><a href="<?=BASE ?>dashboard" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">dashboard</span><span>Dashboard</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
               
                <!-- User tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">person</span><span>Users</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseUser" class="accordion-collapse ps-3 collapse" aria-labelledby="headingUser" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- Roles and permissions tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseRole" aria-expanded="true" aria-controls="collapseRole"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">folder_managed</span><span>Role & Permission</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseRole" class="accordion-collapse ps-3 collapse" aria-labelledby="headingRole" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- category tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseCate" aria-expanded="true" aria-controls="collapseCate"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">category</span><span>Category</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseCate" class="accordion-collapse ps-3 collapse" aria-labelledby="headingCate" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>


                <!-- comments tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseComment" aria-expanded="true" aria-controls="collapseComment"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">comment</span><span>Comments</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseComment" class="accordion-collapse ps-3 collapse" aria-labelledby="headingComment" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

                <!-- settings tabs -->
                <li class="my-1" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="true" aria-controls="collapseSettings"><a href="#" class="d-flex py-2 px-3 rounded align-items-center gap-2 text-decoration-none"><span class="material-symbols-outlined">settings</span><span>Settings</span><i class="fa-solid fa-angle-right text-muted ms-auto"></i></a></li>
                <div id="collapseSettings" class="accordion-collapse ps-3 collapse" aria-labelledby="headingSettings" data-bs-parent="#accordionExample">
                    <ul class="sub-items bg-light rounded p-2 px-3">
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> List</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Transh</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Roles</a></li>
                        <li class=""><a href="#" class="text-decoration-none d-block p-2"><i class="fa-regular fa-circle-dot me-2"></i> Create Role</a></li>
                    </ul>
                </div>

            </ul>
        </div>
</div>