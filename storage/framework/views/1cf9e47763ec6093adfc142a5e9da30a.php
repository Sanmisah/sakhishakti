<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.default','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<script defer src="/assets/js/apexcharts.js"></script>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div>
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Dashboard</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>Graph</span>
            </li>
        </ul>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
            <!-- Users Visit -->
            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Users Visit</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                <circle cx="5" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                                <circle opacity="0.5" cx="12" cy="12" r="2"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="19" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </a>
                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                            class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> $170.46 </div>
                    <div class="badge bg-white/30">+ 2.35% </div>
                </div>
                <div class="flex items-center font-semibold mt-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                        <path opacity="0.5"
                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                        <path
                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 44,700
                </div>
            </div>

            <!-- Sessions -->
            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Sessions</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                <circle cx="5" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                                <circle opacity="0.5" cx="12" cy="12" r="2"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="19" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </a>
                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                            class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">

                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                        </ul>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 74,137 </div>
                    <div class="badge bg-white/30">- 2.35% </div>
                </div>
                <div class="flex items-center font-semibold mt-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                        <path opacity="0.5"
                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                        <path
                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 84,709
                </div>
            </div>

            <!-- Time On-Site -->
            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Time On-Site</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                <circle cx="5" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                                <circle opacity="0.5" cx="12" cy="12" r="2"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="19" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </a>
                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                            class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                        </ul>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 38,085 </div>
                    <div class="badge bg-white/30">+ 1.35% </div>
                </div>
                <div class="flex items-center font-semibold mt-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                        <path opacity="0.5"
                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                        <path
                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 37,894
                </div>
            </div>

            <!-- Bounce Rate -->
            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Bounce Rate</div>
                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                        <a href="javascript:;" @click="toggle">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:opacity-80 opacity-70">
                                <circle cx="5" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                                <circle opacity="0.5" cx="12" cy="12" r="2"
                                    stroke="currentColor" stroke-width="1.5" />
                                <circle cx="19" cy="12" r="2" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                        </a>
                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                            class="ltr:right-0 rtl:left-0 text-black dark:text-white-dark">
                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>

                        </ul>
                    </div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> 49.10% </div>
                    <div class="badge bg-white/30">- 0.35% </div>
                </div>
                <div class="flex items-center font-semibold mt-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                        <path opacity="0.5"
                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                        <path
                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                            stroke="currentColor" stroke-width="1.5"></path>
                    </svg>
                    Last Week 50.01%
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Project\sakhi-shakti\resources\views/dashboard.blade.php ENDPATH**/ ?>