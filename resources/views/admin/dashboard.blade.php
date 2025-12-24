<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800">
<div class="min-h-screen p-8">
    <!-- Header -->
    <div class="mb-12">
        <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Dashboard</h1>
        <p class="text-slate-600 dark:text-slate-400">Welcome back! Here's what's happening today.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <!-- Stat Card 1 -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 border-l-4 border-blue-500">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-1">Total Users</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">1,284</p>
                    <p class="text-green-600 text-sm mt-2">↑ 12% from last month</p>
                </div>
                <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM15 20H9m6 0h6M9 20H3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 border-l-4 border-green-500">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-1">Revenue</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">$24,580</p>
                    <p class="text-green-600 text-sm mt-2">↑ 8.2% from last week</p>
                </div>
                <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 border-l-4 border-purple-500">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-1">Conversion Rate</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">3.24%</p>
                    <p class="text-red-600 text-sm mt-2">↓ 0.5% from last month</p>
                </div>
                <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 border-l-4 border-orange-500">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-1">Active Sessions</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">428</p>
                    <p class="text-green-600 text-sm mt-2">↑ 24 users online</p>
                </div>
                <div class="bg-orange-100 dark:bg-orange-900 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Activity -->
        <div class="lg:col-span-2">
            <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Recent Activity</h2>
                <div class="space-y-4">
                    <!-- Activity Item 1 -->
                    <div class="flex gap-4 pb-4 border-b border-slate-200 dark:border-slate-700 last:border-0">
                        <div class="bg-blue-100 dark:bg-blue-900 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-slate-900 dark:text-white">New order #12045</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Customer: John Smith • $1,200.00</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">2 hours ago</p>
                        </div>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">Completed</span>
                    </div>

                    <!-- Activity Item 2 -->
                    <div class="flex gap-4 pb-4 border-b border-slate-200 dark:border-slate-700 last:border-0">
                        <div class="bg-green-100 dark:bg-green-900 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-slate-900 dark:text-white">New user registered</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Email: sarah.williams@example.com</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">4 hours ago</p>
                        </div>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">New</span>
                    </div>

                    <!-- Activity Item 3 -->
                    <div class="flex gap-4 pb-4 border-b border-slate-200 dark:border-slate-700 last:border-0">
                        <div class="bg-purple-100 dark:bg-purple-900 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.5 3A1.5 1.5 0 001 4.5v.006c0 .766.603 1.409 1.352 1.494.632.966 1.577 1.82 2.75 2.372v3.878a1.5 1.5 0 002.828 1.006l5.322-6.5-.016.016h.016A1.5 1.5 0 1013.5 9.5h-1.934L15.5 4.706A1.5 1.5 0 0013.72 2.881L9.077 8.107A1.5 1.5 0 015.228 7.62V4.5A1.5 1.5 0 002.5 3z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-slate-900 dark:text-white">Performance alert</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Server response time increased by 15%</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">6 hours ago</p>
                        </div>
                        <span class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-xs px-3 py-1 rounded-full">Warning</span>
                    </div>

                    <!-- Activity Item 4 -->
                    <div class="flex gap-4">
                        <div class="bg-orange-100 dark:bg-orange-900 rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-orange-600 dark:text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.3A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-slate-900 dark:text-white">Database backup completed</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Size: 2.4 GB • Status: Verified</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">8 hours ago</p>
                        </div>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">Success</span>
                    </div>
                </div>
                <button class="mt-6 w-full py-2 text-center text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white font-medium border-t border-slate-200 dark:border-slate-700">
                    View all activity →
                </button>
            </div>
        </div>

        <!-- Quick Actions & System Status -->
        <div class="space-y-6">
            <!-- Quick Actions -->
            <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Quick Actions</h2>
                <div class="space-y-3">
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        New User
                    </button>
                    <button class="w-full bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-900 dark:text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                        Settings
                    </button>
                    <button class="w-full bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-900 dark:text-white py-2 px-4 rounded-lg font-medium transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 1112 2.944a11.954 11.954 0 018.618 3.04A12.02 12.02 0 0121 12z"></path>
                        </svg>
                        Reports
                    </button>
                </div>
            </div>

            <!-- System Status -->
            <div class="bg-white dark:bg-slate-800 rounded-lg shadow-md p-6">
                <h2 class="text-lg font-bold text-slate-900 dark:text-white mb-4">System Status</h2>
                <div class="space-y-3">
                    <div class="flex justify-between items-center pb-3 border-b border-slate-200 dark:border-slate-700">
                        <span class="text-sm text-slate-600 dark:text-slate-400">Server</span>
                        <span class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <span class="text-sm font-medium text-slate-900 dark:text-white">Online</span>
                        </span>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-slate-200 dark:border-slate-700">
                        <span class="text-sm text-slate-600 dark:text-slate-400">Database</span>
                        <span class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <span class="text-sm font-medium text-slate-900 dark:text-white">Connected</span>
                        </span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-slate-600 dark:text-slate-400">API</span>
                        <span class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                            <span class="text-sm font-medium text-slate-900 dark:text-white">Operational</span>
                        </span>
                    </div>
                    <div class="mt-4 p-3 bg-slate-100 dark:bg-slate-700 rounded-lg">
                        <p class="text-xs text-slate-600 dark:text-slate-400">
                            Last checked: <span class="font-medium">2 minutes ago</span>
                        </p>
                    </div>
    </div>
</div>
</body>
</html>
