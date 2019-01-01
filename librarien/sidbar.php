<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.php">Librarian</a>
        </h1>
        <span>L</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="index.php">
                <i class="fas fa-th-large"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Book
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="add_book.php">Add Book</a>
                </li>
                <li>
                    <a href="manage_book.php">Manage Book</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Issue A Book
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="issue_book.php">Add Issue Book</a>
                </li>
                <li>
                    <a href="manage_issue_book.php">Manage Issue Book</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="retrun_book.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                Retrun A Book
            </a>
        </li>
        <li>
            <a href="view_event.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View Event
            </a>
        </li>

    </ul>
</nav>