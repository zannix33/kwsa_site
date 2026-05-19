@if(isset($currentUser))
    <a17-dropdown ref="userDropdown" position="bottom-right" :offset="-10">
        <a href="{{ route('admin.users.edit', $currentUser->id) }}" @click.prevent="$refs.userDropdown.toggle()">
            {{ $currentUser->role === 'SUPERADMIN' ? twillTrans('twill::lang.nav.admin') : $currentUser->name }}
            <span symbol="dropdown_module" class="icon icon--dropdown_module">
                <svg>
                    <title>dropdown_module</title>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon--dropdown_module"></use>
                </svg>
            </span>
        </a>
        <div slot="dropdown__content">
            @can('manage-users')
                <a href="{{ route('admin.users.index') }}">{{ twillTrans('twill::lang.nav.cms-users') }}</a>
            @endcan
            <a href="{{ route('admin.users.edit', $currentUser->id) }}">{{ twillTrans('twill::lang.nav.settings') }}</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                {{ csrf_field() }}

                <button type="submit" class="py-2 px-4 text-white bg-danger inline-flex"><i class="fa fa-power-off mr-2"></i> Logout</button>
            </form>
        </div>
    </a17-dropdown>
@endif
