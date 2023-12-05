<?php if (isset($component)) { $__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6 = $component; } ?>
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
    <div class="pt-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mb-6 text-white">
            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Total Visitors</div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> <?php echo e($no_of_reg); ?> </div>
                </div>
            </div>
            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">Today Visitors Register</div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> <?php echo e($no_of_reg_today); ?> </div>
                </div>                
            </div>

           

            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">
                <div class="flex justify-between">
                    <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">BMI</div>
                </div>
                <div class="flex items-center mt-5">
                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3"> <?php echo e($no_of_bmi); ?> </div>
                </div>
            </div>
           
        </div>
    

    <div class="grid xl:grid-cols-3 gap-6 mb-6"  x-data="analytics">
        <div class="panel h-full xl:col-span-2">
            <div
                class="flex items-start justify-between dark:text-white-light mb-5 p-5 border-b  border-[#e0e6ed] dark:border-[#1b2e4b]">
                <h5 class="font-semibold text-lg ">Distribution of children by village</h5>
                
            </div>

            <div x-ref="distributionByVilage" class="overflow-hidden">
                <div
                    class="min-h-[360px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] ">
                    <span
                        class="animate-spin border-2 border-black dark:border-white !border-l-transparent  rounded-full w-5 h-5 inline-flex"></span>
                </div>
            </div>
        </div>
        <div class="panel h-full">
            <div
                class="flex items-start justify-between dark:text-white-light mb-5 p-5 border-b  border-[#e0e6ed] dark:border-[#1b2e4b]">
                <h5 class="font-semibold text-lg ">Distribution of children by Gender</h5>
                
            </div>
            <div class="overflow-hidden">
                <div x-ref="distributionByGender" class="bg-white dark:bg-black rounded-lg">
                    <div
                        class="min-h-[353px] grid place-content-center bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] ">
                        <span
                            class="animate-spin border-2 border-black dark:border-white !border-l-transparent  rounded-full w-5 h-5 inline-flex"></span>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
        
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("analytics", () => ({
                init() {
                    isDark = this.$store.app.theme === "dark" || this.$store.app.isDarkMode ? true :
                        false;
                    isRtl = this.$store.app.rtlClass === "rtl" ? true : false;
                    const distributionByVilage = null;
                    const distributionByGender = null;

                    // statistics
                    setTimeout(() => {                     

                        this.distributionByVilage = new ApexCharts(this.$refs
                            .distributionByVilage, this.distributionByVilageOptions);
                        this.$refs.distributionByVilage.innerHTML = "";
                        this.distributionByVilage.render();

                        this.distributionByGender = new ApexCharts(this.$refs.distributionByGender, this
                            .distributionByGenderOptions)
                        this.$refs.distributionByGender.innerHTML = "";
                        this.distributionByGender.render()

                      
                    }, 300);

                  
                },
                              

                // Distribution of children by village
                get distributionByVilageOptions() {
                    return {
                        series: [{
                                name: 'Counts',
                                data: [
                                <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                '<?php echo e($visit->total); ?>',
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                ]
                            },
                           
                        ],
                        chart: {
                            height: 360,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 2,
                            colors: ['transparent']
                        },
                        colors: ['#5c1ac3', '#ffbb44'],
                        dropShadow: {
                            enabled: true,
                            blur: 3,
                            color: '#515365',
                            opacity: 0.4,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                borderRadius: 10
                            }
                        },
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            itemMargin: {
                                horizontal: 8,
                                vertical: 8
                            }
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            padding: {
                                left: 20,
                                right: 20
                            }
                        },
                        xaxis: {
                            categories: [
                                <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                '<?php echo e($visit->village); ?>',
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ],
                            axisBorder: {
                                show: true,
                                color: isDark ? '#3b3f5c' : '#e0e6ed'
                            },
                        },
                        yaxis: {
                            tickAmount: 6,
                            opposite: isRtl ? true : false,
                            labels: {
                                offsetX: isRtl ? -10 : 0,
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: isDark ? 'dark' : 'light',
                                type: 'vertical',
                                shadeIntensity: 0.3,
                                inverseColors: false,
                                opacityFrom: 1,
                                opacityTo: 0.8,
                                stops: [0, 100]
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            y: {
                                formatter: (val) => {
                                    return val;
                                },
                            },
                        },
                    }
                },

                 // Distribution of children by Gender
                 get distributionByGenderOptions() {
                    return {
                        series: [
                            <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($visit->total); ?>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? '#0e1726' : '#fff'
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f',
                            '#5c1ac3', '#e7515a'
                        ],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function(a,
                                                    b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: [ 
                            <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            '<?php echo e($visit->gender); ?>',
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                }
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                }
                            },
                        }
                    }
                },

             
             
            }));
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6)): ?>
<?php $component = $__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6; ?>
<?php unset($__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6); ?>
<?php endif; ?>

<?php /**PATH /home/sanmisha/@Projects/sakhishakti/resources/views//dashboard.blade.php ENDPATH**/ ?>