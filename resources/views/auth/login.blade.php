<x-layout>
    <x-page-heading>Log In</x-page-heading>
    
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        
        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>