<div id="sidebar" class="sidebar-left">
    <div class="sidebar_inner">
        <div class="list-group no-border list-unstyled">
            <span class="list-group-item heading">Manage Listings</span>
            <a href="<?php echo $url;?>agent/add-property" class="list-group-item <?php echo $addProperty_Active; ?>"><i class="fa fa-fw fa-plus-square-o"></i> Add
                Property</a>
            <a href="<?php echo $url;?>agent/property-lists"
                class="list-group-item d-flex justify-content-between align-items-center <?php echo $propertyList_Active; ?>"><span><i
                        class="fa fa-fw fa-bars"></i> My Properties</span>
                <span class="badge badge-primary badge-pill">1</span>
            </a>
            <span class="list-group-item heading">Manage Account</span>
            <a href="<?php echo $url;?>agent/profile" class="list-group-item <?php echo $profileActive; ?>"><i class="fa fa-fw fa-pencil"></i> My Profile</a>
            <a href="<?php echo $url;?>agent/change-password" class="list-group-item <?php echo $changepasswordActive; ?>"><i class="fa fa-fw fa-lock"></i> Change Password</a>
            <a href="<?php echo $url;?>agent/notifications" class="list-group-item <?php echo $notificationActive; ?>"><i class="fa fa-fw fa-bell-o"></i>Notifications <span class="badge badge-primary badge-pill">2</span></a>
            <a href="<?php echo $url;?>agent/membership" class="list-group-item <?php echo $membershipActive; ?>"><i class="fa fa-fw fa-cubes"></i> Membership</a>
            <a href="<?php echo $url;?>agent/account" class="list-group-item <?php echo $accountActive; ?>"><i class="fa fa-fw fa-cog"></i> Account</a>
        </div>
    </div>
</div>