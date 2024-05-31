<div>
    <x-main full-width>
            {{-- SIDEBAR --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">
     
     
                {{-- MENU --}}
                <x-menu activate-by-route>
     
                    {{-- User --}}
                    @if($user = auth()->user())
                        <x-menu-separator />
     
                        <x-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
                            <x-slot:actions>
                                <x-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="/logout" />
                            </x-slot:actions>
                        </x-list-item>
     
                        <x-menu-separator />
                    @endif
     
                    <x-menu-item title="View Users" icon="o-sparkles" link="/admin/view-users" />
                    <x-menu-item title="Add User" icon="o-sparkles" link="/admin/add-user" />
                    <x-menu-item title="View Saccos" icon="o-sparkles" link="/admin/view-saccos" />
                    <x-menu-item title="Add Sacco" icon="o-sparkles" link="/admin/add-sacco" />
                    <x-menu-item title="View Drivers" icon="o-sparkles" link="/admin/view-drivers" />
                    <x-menu-item title="Add Driver" icon="o-sparkles" link="/admin/add-driver" />
                    <x-menu-item title="View Vehicles" icon="o-sparkles" link="/admin/view-vehicles" />
                    <x-menu-item title="Add Vehicle" icon="o-sparkles" link="/admin/add-vehicle" />
                    <x-menu-sub title="Settings" icon="o-cog-6-tooth">
                        <x-menu-item title="Wifi" icon="o-wifi" link="####" />
                        <x-menu-item title="Archives" icon="o-archive-box" link="####" />
                        <x-menu-item title="Log out" icon="o-power" link="/logout" />
                    </x-menu-sub>
                </x-menu>
            </x-slot:sidebar>
     
            {{-- The `$slot` goes here --}}
            <x-slot:content>
            <x-form wire:submit.prevent="save">
                <x-header title="Add Vehicle" with-anchor separator />
                <x-input label="Registration Number/ Number Plate" placeholder="Enter reg no" wire:model="number_plate" />
                @php
                    $types =  [
                                    [
                                        'id' => 'bus',
                                        'name' => 'bus'
                                    ],
                                    [
                                        'id' => 'matatu',
                                        'name' => 'matatu'
                                    ],
                                    [
                                        'id' => 'taxi',
                                        'name' => 'taxi'
                                    ],
                                    [
                                        'id' => 'lorry',
                                        'name' => 'lorry'
                                    ],
                                    [
                                        'id' => 'motorcycle',
                                        'name' => 'motorcycle'
                                    ],
                                    [
                                        'id' => 'bicycle',
                                        'name' => 'bicycle'
                                    ],
                                ];
                @endphp
                <x-select label="Type" :options="$types" wire:model="type" />
                <x-input label="Color" placeholder="Enter color" wire:model="color" />
                
                <x-slot:actions>
                    <x-button type="submit" label="Save" spinner save class="btn-primary" />
                </x-slot:actions>
            </x-form>
            </x-slot:content>
        </x-main>
    </div>
    