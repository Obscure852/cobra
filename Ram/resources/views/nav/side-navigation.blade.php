<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#dashboard" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="dashboard" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Notifications</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>News</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Data snapshots</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admissions" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Admissions</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admissions" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admissions') }}">
              <i class="bi bi-circle"></i><span>Admissions</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Add Child</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Admissions Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#students" data-bs-toggle="collapse" href="#">
          <i class="bi bi-mortarboard"></i><span>Students </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="students" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('students') }}">
              <i class="bi bi-circle"></i><span>Students</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Add Student</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Students Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#parents" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Parents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="parents" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('parents') }}">
              <i class="bi bi-circle"></i><span>Parents</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Add Parent</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Parents Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hr" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Human Resources</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hr" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('staff') }}">
              <i class="bi bi-circle"></i><span>Staff</span>
            </a>
          </li>
          <li>
            <a href="{{ route('staff-data'); }}">
              <i class="bi bi-circle"></i><span>Add Staff</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Human Resources Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attendance" data-bs-toggle="collapse" href="#">
          <i class="bi bi-check-circle"></i><span>Attendance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attendance" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>All Classes</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Attendance Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#academic" data-bs-toggle="collapse" href="#">
          <i class="bi bi-mortarboard"></i><span>Academic Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="academic" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Create Classes</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Create Optional Classes</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Allocate Students/Core</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Allocate Students/Optional</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Grade Schedule</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Comments Bank</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Reports</span>
            </a>
          </li>
        </ul>
      </li><!-- Academic Management Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#assessment" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-data"></i><span>Assessment</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="assessment" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>All Classes</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Assessment Analysis</span>
            </a>
          </li>
        </ul>
      </li><!-- Assessment Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#communications" data-bs-toggle="collapse" href="#">
          <i class="bi bi-chat"></i><span>Communications</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="communications" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Email</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>SMS</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Notifications</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>News</span>
            </a>
          </li>
        </ul>
      </li><!-- Communications Module -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#setup" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>System Setup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="setup" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Academic Structure</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Academic Year</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Attendance</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Configuration</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Import Data</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Institution Setup</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>License</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Logs</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Portal Management</span>
            </a>
          </li>
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Venues</span>
            </a>
          </li>
        </ul>
      </li><!-- Settings Module -->
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- User Profile Page -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->