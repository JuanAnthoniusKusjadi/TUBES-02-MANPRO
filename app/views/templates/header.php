<div class="navbar bg-light shadow display-grid grid-col-3 align-content-center justify-content-between px-2">
    <div class="navbar-left">
        <div class="display-grid grid-col-2 justify-content-between align-items-center cursor-pointer" onclick="window.location = '<?= BASE_PAGE ?>'">
            <img src="<?= $this::add_image('logo', 'svg') ?>" />
            <h5 class="text-dark">Tubes-Manpro-2</h5>
        </div>
    </div>

    <!-- <div class="navbar-right display-grid align-content-center justify-content-end">
        <div class="dropdown">
            <button onclick="toggleDropdown('dropdown')" class="dropdown-btn">
                <?= isset($user_information) ? $user_information['username'] : 'dropdown' ?>
                <span class="fa fa-caret-down ml-1"></span>
            </button>
            <div id="dropdown" class="dropdown-content">
                <a href="./logout">logout</a>
            </div>
        </div>
    </div>  -->
</div>