<?php

use Livewire\Component;

new class extends Component {
    public string $title = '';
 
    public string $content = '';
 
    public function save()
    {
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
 
        dd($this->title, $this->content);
    }
};
?>

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Create New Post</h1>
            <p class="text-gray-600">Share your thoughts with the world</p>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8">
            <form wire:submit="save" class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                        Post Title
                    </label>
                    <input 
                        type="text" 
                        id="title"
                        wire:model="title"
                        class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-xl focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 outline-none transition-all text-gray-900"
                        placeholder="Enter an engaging title..."
                    >
                    @error('title') 
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
             
                <div>
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                        Content
                    </label>
                    <textarea 
                        id="content"
                        wire:model="content" 
                        rows="8"
                        class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-xl focus:bg-white focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100 outline-none transition-all resize-y text-gray-900"
                        placeholder="Write something amazing..."
                    ></textarea>
                    @error('content') 
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
             
                <!-- Action Buttons -->
                <div class="flex gap-3 pt-4">
                    <button 
                        type="submit"
                        class="flex-1 bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 text-white font-semibold py-3 px-6 rounded-xl transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5"
                    >
                        Publish Post
                    </button>
                </div>
            </form>
        </div>

        <!-- Helper Text -->
        <p class="text-center text-sm text-gray-500 mt-6">
            Your post will be saved as a draft automatically
        </p>
    </div>
</div>