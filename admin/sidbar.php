<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.php">Admin</a>
        </h1>
        <span>A</span>
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
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Student
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="add_student.php">Add Student</a>
                </li>
                <li>
                    <a href="manage_student.php">Manage Student</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Teacher
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="add_teacher.php">Add Teacher</a>
                </li>
                <li>
                    <a href="manage_teacher.php">Manage Teacher</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Librarian
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="add_librarian.php">Add Librarian</a>
                </li>
                <li>
                    <a href="manage_librarian.php">Manage Librarian</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Event
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu4">
                <li>
                    <a href="add_event.php">Add Event</a>
                </li>
                <li>
                    <a href="manage_event.php">Manage Event</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="view_book.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View Request Books
            </a>
        </li>
        <li>
            <a href="view_attendance.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View All Attendance
            </a>
        </li>
        <li>
            <a href="view_assignment.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View All Assignment
            </a>
        </li>
        <li>
            <a href="view_result.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View All Result
            </a>
        </li>
    </ul>
</nav>