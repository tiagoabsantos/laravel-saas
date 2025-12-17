<div class="mx-auto max-w-2xl py-8">
	<form method="post" action="{{ route('talks.store') }}">
		@csrf
		<div class="space-y-12">
			<div class="border-b border-black/10 pb-12">
				<div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
					<div class="sm:col-span-4">
						<label for="title" class="block text-sm/6 font-medium text-black">Title</label>
						<div class="mt-2">
							<input id="title" type="text" name="title" autocomplete="given-name" class="block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
							<x-input-error :messages="$errors->get('title')"/>
						</div>
					</div>

					<div class="sm:col-span-3">
						<label for="type" class="block text-sm/6 font-medium text-black">Type</label>
						<div class="mt-2">
							<select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
								<option>Lightning</option>
								<option>Standard</option>
								<option>Keynote</option>
							</select>
							<x-input-error :messages="$errors->get('type')"/>
						</div>
					</div>

					<div class="sm:col-span-3">
						<label for="length" class="block text-sm/6 font-medium text-black">Length</label>
						<div class="mt-2">
							<input id="length" type="text" name="length" autocomplete="family-name" class="block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
						</div>
					</div>

					<div class="col-span-full">
						<label for="abstract" class="block text-sm/6 font-medium text-black">Abstract</label>
						<div class="mt-2">
							<textarea id="abstract" name="abstract" rows="3" class="block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
						</div>
					</div>

					<div class="col-span-full">
						<label for="organizer_notes" class="block text-sm/6 font-medium text-black">Organizer notes</label>
						<div class="mt-2">
							<textarea id="organizer_notes" name="organizer_notes" rows="3" class="block w-full rounded-md bg-black/5 px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-black/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-6 flex items-center justify-end gap-x-6">
			<button type="button" class="text-sm/6 font-semibold text-black">Cancel</button>
			<button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
		</div>
	</form>
</div>