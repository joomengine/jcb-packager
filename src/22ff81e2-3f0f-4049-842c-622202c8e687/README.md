### JCB! Power
# class AdminView (Details)
> namespace: **VDM\Joomla\Componentbuilder\Package\Service**

```uml
@startuml

class AdminView  #Gold {
  + register(Container $container) : void
  + getGrep(Container $container) : Grep
  + getRemoteConfig(Container $container) : Config
  + getResolver(Container $container) : Resolver
  + getRemoteGet(Container $container) : Get
  + getRemoteSet(Container $container) : Set
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
  + getAdminFieldsGrep(Container $container) : Grep
  + getAdminFieldsRemoteConfig(Container $container) : AdminFields
  + getAdminFieldsResolver(Container $container) : Resolver
  + getAdminFieldsRemoteGet(Container $container) : Get
  + getAdminFieldsRemoteSet(Container $container) : Set
  + getAdminFieldsRelationsGrep(Container $container) : Grep
  + getAdminFieldsRelationsRemoteConfig(Container $container) : AdminFieldsRelations
  + getAdminFieldsRelationsResolver(Container $container) : Resolver
  + getAdminFieldsRelationsRemoteGet(Container $container) : Get
  + getAdminFieldsRelationsRemoteSet(Container $container) : Set
  + getAdminFieldsConditionsGrep(Container $container) : Grep
  + getAdminFieldsConditionsRemoteConfig(Container $container) : AdminFieldsConditions
  + getAdminFieldsConditionsResolver(Container $container) : Resolver
  + getAdminFieldsConditionsRemoteGet(Container $container) : Get
  + getAdminFieldsConditionsRemoteSet(Container $container) : Set
  + getAdminCustomTabsGrep(Container $container) : Grep
  + getAdminCustomTabsRemoteConfig(Container $container) : AdminCustomTabs
  + getAdminCustomTabsResolver(Container $container) : Resolver
  + getAdminCustomTabsRemoteGet(Container $container) : Get
  + getAdminCustomTabsRemoteSet(Container $container) : Set
}

note right of AdminView::register
  Registers the service provider with a DI container.

  since: 5.1.1
  return: void
end note

note left of AdminView::getGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of AdminView::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: Config
end note

note left of AdminView::getResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of AdminView::getRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of AdminView::getRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of AdminView::getItemReadme
  Get The Item Class.

  since: 5.1.1
  return: ItemReadme
end note

note left of AdminView::getMainReadme
  Get The Main Class.

  since: 5.1.1
  return: MainReadme
end note

note right of AdminView::getAdminFieldsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of AdminView::getAdminFieldsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: AdminFields
end note

note right of AdminView::getAdminFieldsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of AdminView::getAdminFieldsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of AdminView::getAdminFieldsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of AdminView::getAdminFieldsRelationsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of AdminView::getAdminFieldsRelationsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: AdminFieldsRelations
end note

note left of AdminView::getAdminFieldsRelationsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of AdminView::getAdminFieldsRelationsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of AdminView::getAdminFieldsRelationsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note right of AdminView::getAdminFieldsConditionsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note left of AdminView::getAdminFieldsConditionsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: AdminFieldsConditions
end note

note right of AdminView::getAdminFieldsConditionsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note left of AdminView::getAdminFieldsConditionsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note right of AdminView::getAdminFieldsConditionsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

note left of AdminView::getAdminCustomTabsGrep
  Get The Grep Class.

  since: 5.1.1
  return: Grep
end note

note right of AdminView::getAdminCustomTabsRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: AdminCustomTabs
end note

note left of AdminView::getAdminCustomTabsResolver
  Get The Resolver Class.

  since: 5.1.1
  return: Resolver
end note

note right of AdminView::getAdminCustomTabsRemoteGet
  Get The Remote Get Class.

  since: 5.1.1
  return: Get
end note

note left of AdminView::getAdminCustomTabsRemoteSet
  Get The Remote Set Class.

  since: 5.1.1
  return: Set
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---22ff81e2_3f0f_4049_842c_622202c8e687---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")