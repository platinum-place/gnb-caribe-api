<div>
    <table class="w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5">
        <thead>
        <tr class="bg-gray-50 dark:bg-white/5">
            <th class="w-1 p-3 text-sm font-semibold text-gray-950 dark:text-white">
                <input type="checkbox" class="fi-checkbox-input rounded border-none bg-white shadow-sm text-primary-600 dark:bg-white/5 dark:text-primary-500 dark:ring-white/20" />
                <span class="sr-only">Select/deselect all items for bulk actions</span>
            </th>
            <th class="px-3 py-3.5 text-sm font-semibold text-gray-950 dark:text-white">
                <span class="flex items-center gap-x-1">Name</span>
            </th>
            <th class="w-1 p-3 text-sm font-semibold text-gray-950 dark:text-white">
                Actions
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-white/5">
        <tr class="hover:bg-gray-50 dark:hover:bg-white/5">
            <td class="p-3">
                <input type="checkbox" class="fi-checkbox-input rounded border-none bg-white shadow-sm text-primary-600 dark:bg-white/5 dark:text-primary-500" />
            </td>
            <td class="p-3">
                <a href="http://127.0.0.1:8000/admin/roles/1" class="text-sm text-gray-950 dark:text-white hover:underline">
                    Admin
                </a>
            </td>
            <td class="p-3">
                <a href="http://127.0.0.1:8000/admin/roles/1" class="text-sm text-gray-700 dark:text-gray-200 hover:underline">
                    View
                </a>
                <a href="http://127.0.0.1:8000/admin/roles/1/edit" class="text-sm text-custom-600 dark:text-custom-400 hover:underline">
                    Edit
                </a>
            </td>
        </tr>
        </tbody>
    </table>

    <x-filament::pagination :paginator="$records" />
</div>
