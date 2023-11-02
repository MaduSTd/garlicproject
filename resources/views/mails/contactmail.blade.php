


<div class="form">
  <div class="content">
    <h2>{{ __('msg.contact us') }}</h2>
    <form action="">
      <input
        class="input"
        type="text"
        placeholder="{{ __('msg.your name') }}"
        name="name"
      />
      <input
        class="input"
        type="email"
        placeholder="{{ __('msg.your e-mail') }}"
        name="email"
      />
      <textarea
        class="input"
        placeholder="{{ __('msg.needs') }}"
        name="message"
      ></textarea>
      <input type="submit" value="Send" />
    </form>
  </div>
</div>
