<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="index.php">Teacher</a>
        </h1>
        <span>T</span>
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
                Attendance
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu1">
                <li>
                    <a href="add_attendance.php">Add Attendance</a>
                </li>
                <li>
                    <a href="manage_attendance.php">Manage Attendance</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Assignment
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="add_assignment.php">Add Assignment</a>
                </li>
                <li>
                    <a href="manage_assignment.php">Manage Assignment</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Result
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="add_result.php">Add Result</a>
                </li>
                <li>
                    <a href="manage_result.php">Manage Result</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="view_event.php" aria-expanded="false">
                <i class="fas fa-th-large"></i>
                View Event
            </a>
        </li>

    </ul>
</nav>