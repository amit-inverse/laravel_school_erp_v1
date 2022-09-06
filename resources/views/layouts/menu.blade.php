<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@if(Auth::user()->role_id < 2) <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            General
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="{{ route('classes.index') }}" class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
                <p>Classes</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('classrooms.index') }}" class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
                <p>Classrooms</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('levels.index') }}" class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
                <p>Levels</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('batches.index') }}" class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
                <p>Batches</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('shifts.index') }}" class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
                <p>Shifts</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
                <p>Courses</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('faculties.index') }}" class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
                <p>Faculties</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('times.index') }}" class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
                <p>Times</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('academics.index') }}" class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
                <p>Academics</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('days.index') }}" class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
                <p>Days</p>
            </a>
        </li>

    </ul>
    </li>
    @endif

    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Schedule
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ route('classAssignings.index') }}" class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
                    <p>Class Assignings</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('classSchedulings.index') }}" class="nav-link {{ Request::is('classSchedulings*') ? 'active' : '' }}">
                    <p>Class Schedulings</p>
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item">
        <a href="{{ route('admissions.index') }}" class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
            <i class="fa fa-graduation-cap"></i>
            <p>Admissions</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('teachers.index') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
            <i class="fa fa-user-circle"></i>
            <p>Teachers</p>
        </a>
    </li>

    @if(Auth::user()->role_id < 4) <li class="nav-item">
        <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
            <i class="fa fa-calendar"></i>
            <p>Attendances</p>
        </a>
        </li>

        @endif

        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
                <i class="fa fa-edit"></i>
                <p>Roles</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <i class="fa fa-user"></i>
                <p>Users</p>
            </a>
        </li>

        @if(Auth::user()->role_id < 4) <li class="nav-item">
            <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
                <i class="fa fa-money"></i>
                <p>Transactions</p>
            </a>
            </li>
            @endif<li class="nav-item">
    <a href="{{ route('departments.index') }}"
       class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
        <p>Departments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('rolls.index') }}"
       class="nav-link {{ Request::is('rolls*') ? 'active' : '' }}">
        <p>Rolls</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('feesStructures.index') }}"
       class="nav-link {{ Request::is('feesStructures*') ? 'active' : '' }}">
        <p>Fees Structures</p>
    </a>
</li>


