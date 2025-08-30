# JCB! Super Powers

### What Are JCB Super Powers?
In simple terms, **JCB Super Powers are PHP classes** — but managed entirely from the Joomla Component Builder (JCB) interface.

You can use JCB to create your own:
- **Classes**
- **Interfaces**
- **Abstract classes**
- **Traits**
- **Final classes**

These are full-featured PHP code units that you define visually in the JCB GUI. JCB then takes care of:
- Proper **namespacing**
- Correct **file placement**
- Seamless **project integration**

Every Super Power is treated as a reusable unit of logic. It can be automatically injected into any part of your JCB-powered component, or used in other components or codebases via a **SPK** (Super Power Key).

Even better — you can use **dynamic placeholders** like [[[`NamespacePrefix`]]] or [[[`ComponentNamespace`]]] in your Super Power code Namespace. These automatically adapt when reused in different projects, making your logic portable and future-proof.

> In short: **Super Powers turn JCB into a PHP code factory** — giving you the power of advanced PHP with none of the manual file management.

To learn how to create, manage, and use Super Powers, see the  
[Super Powers Documentation →](https://git.vdm.dev/joomla/super-powers/wiki)

### What Can I Find Here?
This repository acts as a **central registry of approved Super Powers** specific to this JCB instance.  
Only the Super Powers that have been explicitly assigned to this repository are listed here.

In JCB, you can organize your Super Powers across multiple repositories.  
For example, we have separate repositories for:

- [GITEA](https://git.vdm.dev/joomla/gitea)-related classes
- [OpenAI](https://git.vdm.dev/joomla/openai) integrations
- Core [Super Power](https://git.vdm.dev/joomla/super-powers) collection
- and many more...

Each repository maintains its own index, and only the powers assigned to that specific repository will appear in its list.
#### How to Use These Super Powers
If you want to use any of the classes listed here in your own component logic, simply reference their **SPK** (Super Power Key):

```
Super---[unique-guid]---Power
```

> Replace each `---` with `___` when using the key inside your code.

JCB will automatically resolve this SPK during compilation, placing the associated class in the correct location with the correct namespace based on your component context.  
This makes your logic both **reusable** and **component-aware**, without hardcoding anything.

---
# Index of powers

- **Namespace**: [VDM\Joomla\Componentbuilder\Fieldtype](#vdm-joomla-componentbuilder-fieldtype)

  - **final class Grep** | [Details](src/d8d35836-60f2-4464-a306-097f079c4f13) | [Raw](src/d8d35836-60f2-4464-a306-097f079c4f13/code.power) | [Settings](src/d8d35836-60f2-4464-a306-097f079c4f13/settings.json) | SPK: `Super---d8d35836_60f2_4464_a306_097f079c4f13---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\JoomlaPower](#vdm-joomla-componentbuilder-joomlapower)

  - **final class Grep** | [Details](src/355bf21a-f859-4528-9110-bcd2c6d05ea7) | [Raw](src/355bf21a-f859-4528-9110-bcd2c6d05ea7/code.power) | [Settings](src/355bf21a-f859-4528-9110-bcd2c6d05ea7/settings.json) | SPK: `Super---355bf21a_f859_4528_9110_bcd2c6d05ea7---Power`
  - **class Config** | [Details](src/0b821bba-7503-4448-90e7-f3c1bd51dfd6) | [Raw](src/0b821bba-7503-4448-90e7-f3c1bd51dfd6/code.power) | [Settings](src/0b821bba-7503-4448-90e7-f3c1bd51dfd6/settings.json) | SPK: `Super---0b821bba_7503_4448_90e7_f3c1bd51dfd6---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package](#vdm-joomla-componentbuilder-package)

  - **abstract class Factory** | [Details](src/072b7289-cd9a-499a-b227-314f6ba653f4) | [Raw](src/072b7289-cd9a-499a-b227-314f6ba653f4/code.power) | [Settings](src/072b7289-cd9a-499a-b227-314f6ba653f4/settings.json) | SPK: `Super---072b7289_cd9a_499a_b227_314f6ba653f4---Power`
  - **final class Grep** | [Details](src/4715e717-8984-4f4b-b239-753890b20668) | [Raw](src/4715e717-8984-4f4b-b239-753890b20668/code.power) | [Settings](src/4715e717-8984-4f4b-b239-753890b20668/settings.json) | SPK: `Super---4715e717_8984_4f4b_b239_753890b20668---Power`
  - **final class MessageBus** | [Details](src/dcb893ed-9a9f-426d-b1fd-3707a0be98c0) | [Raw](src/dcb893ed-9a9f-426d-b1fd-3707a0be98c0/code.power) | [Settings](src/dcb893ed-9a9f-426d-b1fd-3707a0be98c0/settings.json) | SPK: `Super---dcb893ed_9a9f_426d_b1fd_3707a0be98c0---Power`
  - **class Config** | [Details](src/ee66764f-0f4c-4b11-a726-d0cb55ddb252) | [Raw](src/ee66764f-0f4c-4b11-a726-d0cb55ddb252/code.power) | [Settings](src/ee66764f-0f4c-4b11-a726-d0cb55ddb252/settings.json) | SPK: `Super---ee66764f_0f4c_4b11_a726_d0cb55ddb252---Power`
  - **class GrepContent** | [Details](src/ec48c3dc-8355-4919-aad1-591521fc36a2) | [Raw](src/ec48c3dc-8355-4919-aad1-591521fc36a2/code.power) | [Settings](src/ec48c3dc-8355-4919-aad1-591521fc36a2/settings.json) | SPK: `Super---ec48c3dc_8355_4919_aad1_591521fc36a2---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Power](#vdm-joomla-componentbuilder-power)

  - **final class Grep** | [Details](src/6784dd52-0909-451a-a872-9a942a023c68) | [Raw](src/6784dd52-0909-451a-a872-9a942a023c68/code.power) | [Settings](src/6784dd52-0909-451a-a872-9a942a023c68/settings.json) | SPK: `Super---6784dd52_0909_451a_a872_9a942a023c68---Power`
  - **final class Table** | [Details](src/13a32ed6-d969-42c1-b81a-7b807f953464) | [Raw](src/13a32ed6-d969-42c1-b81a-7b807f953464/code.power) | [Settings](src/13a32ed6-d969-42c1-b81a-7b807f953464/settings.json) | SPK: `Super---13a32ed6_d969_42c1_b81a_7b807f953464---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Remote](#vdm-joomla-componentbuilder-remote)

  - **abstract class Grep** | [Details](src/98f69fd3-e051-401a-be36-8d03fa13e5f4) | [Raw](src/98f69fd3-e051-401a-be36-8d03fa13e5f4/code.power) | [Settings](src/98f69fd3-e051-401a-be36-8d03fa13e5f4/settings.json) | SPK: `Super---98f69fd3_e051_401a_be36_8d03fa13e5f4---Power`
  - **final class Get** | [Details](src/3ab0eba9-f37b-4b37-aec1-2e78067f2aff) | [Raw](src/3ab0eba9-f37b-4b37-aec1-2e78067f2aff/code.power) | [Settings](src/3ab0eba9-f37b-4b37-aec1-2e78067f2aff/settings.json) | SPK: `Super---3ab0eba9_f37b_4b37_aec1_2e78067f2aff---Power`
  - **class Set** | [Details](src/f1ba7387-0e93-489d-934f-530caf3bdc83) | [Raw](src/f1ba7387-0e93-489d-934f-530caf3bdc83/code.power) | [Settings](src/f1ba7387-0e93-489d-934f-530caf3bdc83/settings.json) | SPK: `Super---f1ba7387_0e93_489d_934f_530caf3bdc83---Power`
  - **trait SetDependenciesTrait** | [Details](src/98cd6e39-0c40-49dc-b28a-a154fba0fa0f) | [Raw](src/98cd6e39-0c40-49dc-b28a-a154fba0fa0f/code.power) | [Settings](src/98cd6e39-0c40-49dc-b28a-a154fba0fa0f/settings.json) | SPK: `Super---98cd6e39_0c40_49dc_b28a_a154fba0fa0f---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Repository](#vdm-joomla-componentbuilder-repository)

  - **abstract class Factory** | [Details](src/582e2948-a413-4244-a78e-145da0e18185) | [Raw](src/582e2948-a413-4244-a78e-145da0e18185/code.power) | [Settings](src/582e2948-a413-4244-a78e-145da0e18185/settings.json) | SPK: `Super---582e2948_a413_4244_a78e_145da0e18185---Power`
  - **final class Grep** | [Details](src/7709f0cc-eb07-4202-972f-cb323e897564) | [Raw](src/7709f0cc-eb07-4202-972f-cb323e897564/code.power) | [Settings](src/7709f0cc-eb07-4202-972f-cb323e897564/settings.json) | SPK: `Super---7709f0cc_eb07_4202_972f_cb323e897564---Power`
  - **class Config** | [Details](src/4e3be01f-73c6-431d-854c-f3fb95647fd1) | [Raw](src/4e3be01f-73c6-431d-854c-f3fb95647fd1/code.power) | [Settings](src/4e3be01f-73c6-431d-854c-f3fb95647fd1/settings.json) | SPK: `Super---4e3be01f_73c6_431d_854c_f3fb95647fd1---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Snippet](#vdm-joomla-componentbuilder-snippet)

  - **abstract class Factory** | [Details](src/4bc333af-296a-449c-a55e-a70a84a6aef4) | [Raw](src/4bc333af-296a-449c-a55e-a70a84a6aef4/code.power) | [Settings](src/4bc333af-296a-449c-a55e-a70a84a6aef4/settings.json) | SPK: `Super---4bc333af_296a_449c_a55e_a70a84a6aef4---Power`
  - **final class Grep** | [Details](src/909b78a0-2c36-42ce-8a66-d56697987ef6) | [Raw](src/909b78a0-2c36-42ce-8a66-d56697987ef6/code.power) | [Settings](src/909b78a0-2c36-42ce-8a66-d56697987ef6/settings.json) | SPK: `Super---909b78a0_2c36_42ce_8a66_d56697987ef6---Power`
  - **class Config** | [Details](src/cc072717-33bd-433c-9a82-d47fcab286ac) | [Raw](src/cc072717-33bd-433c-9a82-d47fcab286ac/code.power) | [Settings](src/cc072717-33bd-433c-9a82-d47fcab286ac/settings.json) | SPK: `Super---cc072717_33bd_433c_9a82_d47fcab286ac---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Utilities](#vdm-joomla-componentbuilder-utilities)

  - **class Normalize** | [Details](src/01a26f14-e29f-47bb-bd11-d6c2c177f6f4) | [Raw](src/01a26f14-e29f-47bb-bd11-d6c2c177f6f4/code.power) | [Settings](src/01a26f14-e29f-47bb-bd11-d6c2c177f6f4/settings.json) | SPK: `Super---01a26f14_e29f_47bb_bd11_d6c2c177f6f4---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Remote](#vdm-joomla-interfaces-remote)

  - **interface BaseInterface** | [Details](src/1d0a2283-2d00-4c98-bf93-19e96c846d62) | [Raw](src/1d0a2283-2d00-4c98-bf93-19e96c846d62/code.power) | [Settings](src/1d0a2283-2d00-4c98-bf93-19e96c846d62/settings.json) | SPK: `Super---1d0a2283_2d00_4c98_bf93_19e96c846d62---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Fieldtype\Readme](#vdm-joomla-componentbuilder-fieldtype-readme)

  - **final class Main** | [Details](src/927fc3eb-9332-43ec-b903-ce16dcf6df09) | [Raw](src/927fc3eb-9332-43ec-b903-ce16dcf6df09/code.power) | [Settings](src/927fc3eb-9332-43ec-b903-ce16dcf6df09/settings.json) | SPK: `Super---927fc3eb_9332_43ec_b903_ce16dcf6df09---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Fieldtype\Remote](#vdm-joomla-componentbuilder-fieldtype-remote)

  - **final class Config** | [Details](src/6861d9ef-9b4b-47b6-b2a6-2c3a8f15a2da) | [Raw](src/6861d9ef-9b4b-47b6-b2a6-2c3a8f15a2da/code.power) | [Settings](src/6861d9ef-9b4b-47b6-b2a6-2c3a8f15a2da/settings.json) | SPK: `Super---6861d9ef_9b4b_47b6_b2a6_2c3a8f15a2da---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\JoomlaPower\Readme](#vdm-joomla-componentbuilder-joomlapower-readme)

  - **final class Item** | [Details](src/fcbd0dd7-1f26-472e-abd3-56265f4999f2) | [Raw](src/fcbd0dd7-1f26-472e-abd3-56265f4999f2/code.power) | [Settings](src/fcbd0dd7-1f26-472e-abd3-56265f4999f2/settings.json) | SPK: `Super---fcbd0dd7_1f26_472e_abd3_56265f4999f2---Power`
  - **final class Main** | [Details](src/aca1e57d-6fe8-4bad-bd39-7ebac333ac6e) | [Raw](src/aca1e57d-6fe8-4bad-bd39-7ebac333ac6e/code.power) | [Settings](src/aca1e57d-6fe8-4bad-bd39-7ebac333ac6e/settings.json) | SPK: `Super---aca1e57d_6fe8_4bad_bd39_7ebac333ac6e---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\JoomlaPower\Remote](#vdm-joomla-componentbuilder-joomlapower-remote)

  - **final class Config** | [Details](src/5520dcad-6730-478d-a1d0-6b56012bed66) | [Raw](src/5520dcad-6730-478d-a1d0-6b56012bed66/code.power) | [Settings](src/5520dcad-6730-478d-a1d0-6b56012bed66/settings.json) | SPK: `Super---5520dcad_6730_478d_a1d0_6b56012bed66---Power`
  - **final class Set** | [Details](src/85cddb24-7ee6-4d86-a0db-615f443e1aec) | [Raw](src/85cddb24-7ee6-4d86-a0db-615f443e1aec/code.power) | [Settings](src/85cddb24-7ee6-4d86-a0db-615f443e1aec/settings.json) | SPK: `Super---85cddb24_7ee6_4d86_a0db_615f443e1aec---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Builder](#vdm-joomla-componentbuilder-package-builder)

  - **class Entities** | [Details](src/0c22b0d7-6e82-4831-a225-440d6f369961) | [Raw](src/0c22b0d7-6e82-4831-a225-440d6f369961/code.power) | [Settings](src/0c22b0d7-6e82-4831-a225-440d6f369961/settings.json) | SPK: `Super---0c22b0d7_6e82_4831_a225_440d6f369961---Power`
  - **class Get** | [Details](src/6f2607e9-a5a3-49d7-b707-33cedd5302f0) | [Raw](src/6f2607e9-a5a3-49d7-b707-33cedd5302f0/code.power) | [Settings](src/6f2607e9-a5a3-49d7-b707-33cedd5302f0/settings.json) | SPK: `Super---6f2607e9_a5a3_49d7_b707_33cedd5302f0---Power`
  - **class Set** | [Details](src/f3ca58c7-22d1-4759-b633-fae0a635d9a4) | [Raw](src/f3ca58c7-22d1-4759-b633-fae0a635d9a4/code.power) | [Settings](src/f3ca58c7-22d1-4759-b633-fae0a635d9a4/settings.json) | SPK: `Super---f3ca58c7_22d1_4759_b633_fae0a635d9a4---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Dependency](#vdm-joomla-componentbuilder-package-dependency)

  - **final class Resolver** | [Details](src/d325341e-4ba9-45f3-a944-3919adca5570) | [Raw](src/d325341e-4ba9-45f3-a944-3919adca5570/code.power) | [Settings](src/d325341e-4ba9-45f3-a944-3919adca5570/settings.json) | SPK: `Super---d325341e_4ba9_45f3_a944_3919adca5570---Power`
  - **final class Tracker** | [Details](src/9787d63d-4d2e-44d3-9ffb-e4bfffd1a5a8) | [Raw](src/9787d63d-4d2e-44d3-9ffb-e4bfffd1a5a8/code.power) | [Settings](src/9787d63d-4d2e-44d3-9ffb-e4bfffd1a5a8/settings.json) | SPK: `Super---9787d63d_4d2e_44d3_9ffb_e4bfffd1a5a8---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Readme](#vdm-joomla-componentbuilder-package-readme)

  - **abstract class Main** | [Details](src/79bcae7f-6fa9-4cb9-96b7-a4ec0a8d556c) | [Raw](src/79bcae7f-6fa9-4cb9-96b7-a4ec0a8d556c/code.power) | [Settings](src/79bcae7f-6fa9-4cb9-96b7-a4ec0a8d556c/settings.json) | SPK: `Super---79bcae7f_6fa9_4cb9_96b7_a4ec0a8d556c---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Remote](#vdm-joomla-componentbuilder-package-remote)

  - **abstract class GetContent** | [Details](src/aa50e254-ca08-4767-a165-83a9244e2f9d) | [Raw](src/aa50e254-ca08-4767-a165-83a9244e2f9d/code.power) | [Settings](src/aa50e254-ca08-4767-a165-83a9244e2f9d/settings.json) | SPK: `Super---aa50e254_ca08_4767_a165_83a9244e2f9d---Power`
  - **abstract class SetContent** | [Details](src/47f212fe-4c23-4e66-8c2b-09761b2808ef) | [Raw](src/47f212fe-4c23-4e66-8c2b-09761b2808ef/code.power) | [Settings](src/47f212fe-4c23-4e66-8c2b-09761b2808ef/settings.json) | SPK: `Super---47f212fe_4c23_4e66_8c2b_09761b2808ef---Power`
  - **final class GetFile** | [Details](src/6800fbca-53a7-4908-813f-a9cd56e4ca57) | [Raw](src/6800fbca-53a7-4908-813f-a9cd56e4ca57/code.power) | [Settings](src/6800fbca-53a7-4908-813f-a9cd56e4ca57/settings.json) | SPK: `Super---6800fbca_53a7_4908_813f_a9cd56e4ca57---Power`
  - **final class GetFolder** | [Details](src/cc1901e5-90ce-485a-87f9-5fc22ee6a4b6) | [Raw](src/cc1901e5-90ce-485a-87f9-5fc22ee6a4b6/code.power) | [Settings](src/cc1901e5-90ce-485a-87f9-5fc22ee6a4b6/settings.json) | SPK: `Super---cc1901e5_90ce_485a_87f9_5fc22ee6a4b6---Power`
  - **final class SetFolder** | [Details](src/9ecea97f-251b-42c8-b80d-39dc522e452f) | [Raw](src/9ecea97f-251b-42c8-b80d-39dc522e452f/code.power) | [Settings](src/9ecea97f-251b-42c8-b80d-39dc522e452f/settings.json) | SPK: `Super---9ecea97f_251b_42c8_b80d_39dc522e452f---Power`
  - **class SetFile** | [Details](src/76c3fb5f-da17-4d4d-9f95-7dfb5d0fb9e8) | [Raw](src/76c3fb5f-da17-4d4d-9f95-7dfb5d0fb9e8/code.power) | [Settings](src/76c3fb5f-da17-4d4d-9f95-7dfb5d0fb9e8/settings.json) | SPK: `Super---76c3fb5f_da17_4d4d_9f95_7dfb5d0fb9e8---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Service](#vdm-joomla-componentbuilder-package-service)

  - **class AdminView** | [Details](src/22ff81e2-3f0f-4049-842c-622202c8e687) | [Raw](src/22ff81e2-3f0f-4049-842c-622202c8e687/code.power) | [Settings](src/22ff81e2-3f0f-4049-842c-622202c8e687/settings.json) | SPK: `Super---22ff81e2_3f0f_4049_842c_622202c8e687---Power`
  - **class Component** | [Details](src/a6e4fbb4-86ce-4e9a-905c-bf6227eb604b) | [Raw](src/a6e4fbb4-86ce-4e9a-905c-bf6227eb604b/code.power) | [Settings](src/a6e4fbb4-86ce-4e9a-905c-bf6227eb604b/settings.json) | SPK: `Super---a6e4fbb4_86ce_4e9a_905c_bf6227eb604b---Power`
  - **class CustomAdminView** | [Details](src/1850e10c-57c6-41f0-baa6-5876b554d98d) | [Raw](src/1850e10c-57c6-41f0-baa6-5876b554d98d/code.power) | [Settings](src/1850e10c-57c6-41f0-baa6-5876b554d98d/settings.json) | SPK: `Super---1850e10c_57c6_41f0_baa6_5876b554d98d---Power`
  - **class CustomCode** | [Details](src/ecdd9ea6-cb5b-4316-8c43-c2fee2976e06) | [Raw](src/ecdd9ea6-cb5b-4316-8c43-c2fee2976e06/code.power) | [Settings](src/ecdd9ea6-cb5b-4316-8c43-c2fee2976e06/settings.json) | SPK: `Super---ecdd9ea6_cb5b_4316_8c43_c2fee2976e06---Power`
  - **class Dependencies** | [Details](src/cc3c9030-50b6-4907-867f-3354ab2d94e5) | [Raw](src/cc3c9030-50b6-4907-867f-3354ab2d94e5/code.power) | [Settings](src/cc3c9030-50b6-4907-867f-3354ab2d94e5/settings.json) | SPK: `Super---cc3c9030_50b6_4907_867f_3354ab2d94e5---Power`
  - **class DynamicGet** | [Details](src/f89e8379-267b-448c-bb68-c26cda31c98e) | [Raw](src/f89e8379-267b-448c-bb68-c26cda31c98e/code.power) | [Settings](src/f89e8379-267b-448c-bb68-c26cda31c98e/settings.json) | SPK: `Super---f89e8379_267b_448c_bb68_c26cda31c98e---Power`
  - **class Field** | [Details](src/9c59d593-a9e4-4b9d-a8ed-d31f9c91e298) | [Raw](src/9c59d593-a9e4-4b9d-a8ed-d31f9c91e298/code.power) | [Settings](src/9c59d593-a9e4-4b9d-a8ed-d31f9c91e298/settings.json) | SPK: `Super---9c59d593_a9e4_4b9d_a8ed_d31f9c91e298---Power`
  - **class JoomlaModule** | [Details](src/e55aaad9-e40e-478a-a5ce-b94af3d1d1ff) | [Raw](src/e55aaad9-e40e-478a-a5ce-b94af3d1d1ff/code.power) | [Settings](src/e55aaad9-e40e-478a-a5ce-b94af3d1d1ff/settings.json) | SPK: `Super---e55aaad9_e40e_478a_a5ce_b94af3d1d1ff---Power`
  - **class JoomlaPlugin** | [Details](src/394c9c84-52ab-4246-bff9-654ef453f5e8) | [Raw](src/394c9c84-52ab-4246-bff9-654ef453f5e8/code.power) | [Settings](src/394c9c84-52ab-4246-bff9-654ef453f5e8/settings.json) | SPK: `Super---394c9c84_52ab_4246_bff9_654ef453f5e8---Power`
  - **class Layout** | [Details](src/2d3bc7e1-88d3-4318-9cb3-cb27c75e9c50) | [Raw](src/2d3bc7e1-88d3-4318-9cb3-cb27c75e9c50/code.power) | [Settings](src/2d3bc7e1-88d3-4318-9cb3-cb27c75e9c50/settings.json) | SPK: `Super---2d3bc7e1_88d3_4318_9cb3_cb27c75e9c50---Power`
  - **class Library** | [Details](src/283bd095-8244-437a-b1c6-474248a28140) | [Raw](src/283bd095-8244-437a-b1c6-474248a28140/code.power) | [Settings](src/283bd095-8244-437a-b1c6-474248a28140/settings.json) | SPK: `Super---283bd095_8244_437a_b1c6_474248a28140---Power`
  - **class Package** | [Details](src/da4c9111-e640-463b-96c9-8ac02ed896ce) | [Raw](src/da4c9111-e640-463b-96c9-8ac02ed896ce/code.power) | [Settings](src/da4c9111-e640-463b-96c9-8ac02ed896ce/settings.json) | SPK: `Super---da4c9111_e640_463b_96c9_8ac02ed896ce---Power`
  - **class Power** | [Details](src/cefe8a98-82f7-4dda-8382-d811d611e2ad) | [Raw](src/cefe8a98-82f7-4dda-8382-d811d611e2ad/code.power) | [Settings](src/cefe8a98-82f7-4dda-8382-d811d611e2ad/settings.json) | SPK: `Super---cefe8a98_82f7_4dda_8382_d811d611e2ad---Power`
  - **class SiteView** | [Details](src/ed7fc3b5-fba9-4271-aea5-b873b48b6fb7) | [Raw](src/ed7fc3b5-fba9-4271-aea5-b873b48b6fb7/code.power) | [Settings](src/ed7fc3b5-fba9-4271-aea5-b873b48b6fb7/settings.json) | SPK: `Super---ed7fc3b5_fba9_4271_aea5_b873b48b6fb7---Power`
  - **class Template** | [Details](src/89ae4bf6-c0a7-4ce2-8416-96804a125fa0) | [Raw](src/89ae4bf6-c0a7-4ce2-8416-96804a125fa0/code.power) | [Settings](src/89ae4bf6-c0a7-4ce2-8416-96804a125fa0/settings.json) | SPK: `Super---89ae4bf6_c0a7_4ce2_8416_96804a125fa0---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Power\Interfaces](#vdm-joomla-componentbuilder-power-interfaces)

  - **interface TableInterface** | [Details](src/1a977217-0bb6-44e9-a201-6b4f8478e5b1) | [Raw](src/1a977217-0bb6-44e9-a201-6b4f8478e5b1/code.power) | [Settings](src/1a977217-0bb6-44e9-a201-6b4f8478e5b1/settings.json) | SPK: `Super---1a977217_0bb6_44e9_a201_6b4f8478e5b1---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Power\Readme](#vdm-joomla-componentbuilder-power-readme)

  - **final class Item** | [Details](src/efb1d0f8-2d14-4d2c-8b5f-4fcdd9df45a5) | [Raw](src/efb1d0f8-2d14-4d2c-8b5f-4fcdd9df45a5/code.power) | [Settings](src/efb1d0f8-2d14-4d2c-8b5f-4fcdd9df45a5/settings.json) | SPK: `Super---efb1d0f8_2d14_4d2c_8b5f_4fcdd9df45a5---Power`
  - **final class Main** | [Details](src/0d08c583-04d5-454e-b756-48ca05e1651a) | [Raw](src/0d08c583-04d5-454e-b756-48ca05e1651a/code.power) | [Settings](src/0d08c583-04d5-454e-b756-48ca05e1651a/settings.json) | SPK: `Super---0d08c583_04d5_454e_b756_48ca05e1651a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Power\Remote](#vdm-joomla-componentbuilder-power-remote)

  - **final class Config** | [Details](src/ce01482d-9157-461e-8da3-3eae728cc71e) | [Raw](src/ce01482d-9157-461e-8da3-3eae728cc71e/code.power) | [Settings](src/ce01482d-9157-461e-8da3-3eae728cc71e/settings.json) | SPK: `Super---ce01482d_9157_461e_8da3_3eae728cc71e---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Repository\Readme](#vdm-joomla-componentbuilder-repository-readme)

  - **final class Item** | [Details](src/e65cc7f7-4275-480c-9e9e-aee5f233efe7) | [Raw](src/e65cc7f7-4275-480c-9e9e-aee5f233efe7/code.power) | [Settings](src/e65cc7f7-4275-480c-9e9e-aee5f233efe7/settings.json) | SPK: `Super---e65cc7f7_4275_480c_9e9e_aee5f233efe7---Power`
  - **final class Main** | [Details](src/51b454e3-2389-4685-b8bb-c7d51f42ef4b) | [Raw](src/51b454e3-2389-4685-b8bb-c7d51f42ef4b/code.power) | [Settings](src/51b454e3-2389-4685-b8bb-c7d51f42ef4b/settings.json) | SPK: `Super---51b454e3_2389_4685_b8bb_c7d51f42ef4b---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Repository\Remote](#vdm-joomla-componentbuilder-repository-remote)

  - **final class Config** | [Details](src/15741b30-5b1d-48c2-9953-33046e90072a) | [Raw](src/15741b30-5b1d-48c2-9953-33046e90072a/code.power) | [Settings](src/15741b30-5b1d-48c2-9953-33046e90072a/settings.json) | SPK: `Super---15741b30_5b1d_48c2_9953_33046e90072a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Repository\Service](#vdm-joomla-componentbuilder-repository-service)

  - **class Repository** | [Details](src/14c5bfcf-11ab-40c6-bbf9-4710306da647) | [Raw](src/14c5bfcf-11ab-40c6-bbf9-4710306da647/code.power) | [Settings](src/14c5bfcf-11ab-40c6-bbf9-4710306da647/settings.json) | SPK: `Super---14c5bfcf_11ab_40c6_bbf9_4710306da647---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\SnippetType\Remote](#vdm-joomla-componentbuilder-snippettype-remote)

  - **class Config** | [Details](src/e1134463-de59-4b3c-9a1b-048b079f3321) | [Raw](src/e1134463-de59-4b3c-9a1b-048b079f3321/code.power) | [Settings](src/e1134463-de59-4b3c-9a1b-048b079f3321/settings.json) | SPK: `Super---e1134463_de59_4b3c_9a1b_048b079f3321---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Snippet\Builder](#vdm-joomla-componentbuilder-snippet-builder)

  - **class Entities** | [Details](src/20b02d99-d69e-47e0-ac05-7866f0deb055) | [Raw](src/20b02d99-d69e-47e0-ac05-7866f0deb055/code.power) | [Settings](src/20b02d99-d69e-47e0-ac05-7866f0deb055/settings.json) | SPK: `Super---20b02d99_d69e_47e0_ac05_7866f0deb055---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Snippet\Readme](#vdm-joomla-componentbuilder-snippet-readme)

  - **final class Item** | [Details](src/23f2465c-a5de-4e4d-a6c1-419127ab2b43) | [Raw](src/23f2465c-a5de-4e4d-a6c1-419127ab2b43/code.power) | [Settings](src/23f2465c-a5de-4e4d-a6c1-419127ab2b43/settings.json) | SPK: `Super---23f2465c_a5de_4e4d_a6c1_419127ab2b43---Power`
  - **final class Main** | [Details](src/537f4b68-e375-4799-a5c3-3b291f716c6f) | [Raw](src/537f4b68-e375-4799-a5c3-3b291f716c6f/code.power) | [Settings](src/537f4b68-e375-4799-a5c3-3b291f716c6f/settings.json) | SPK: `Super---537f4b68_e375_4799_a5c3_3b291f716c6f---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Snippet\Remote](#vdm-joomla-componentbuilder-snippet-remote)

  - **final class Config** | [Details](src/d490d391-9ed6-49a0-8702-d9b6610ef07d) | [Raw](src/d490d391-9ed6-49a0-8702-d9b6610ef07d/code.power) | [Settings](src/d490d391-9ed6-49a0-8702-d9b6610ef07d/settings.json) | SPK: `Super---d490d391_9ed6_49a0_8702_d9b6610ef07d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Snippet\Service](#vdm-joomla-componentbuilder-snippet-service)

  - **class Snippet** | [Details](src/14751303-e00d-4098-8bc0-9c65b0d553a2) | [Raw](src/14751303-e00d-4098-8bc0-9c65b0d553a2/code.power) | [Settings](src/14751303-e00d-4098-8bc0-9c65b0d553a2/settings.json) | SPK: `Super---14751303_e00d_4098_8bc0_9c65b0d553a2---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Remote\Dependency](#vdm-joomla-interfaces-remote-dependency)

  - **interface ResolverInterface** | [Details](src/40cacef9-c4be-40ac-95e4-0925b980731d) | [Raw](src/40cacef9-c4be-40ac-95e4-0925b980731d/code.power) | [Settings](src/40cacef9-c4be-40ac-95e4-0925b980731d/settings.json) | SPK: `Super---40cacef9_c4be_40ac_95e4_0925b980731d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminCustomTabs\Remote](#vdm-joomla-componentbuilder-package-admincustomtabs-remote)

  - **class Config** | [Details](src/1a4cdbd2-7fcf-40bf-895f-deeea3103382) | [Raw](src/1a4cdbd2-7fcf-40bf-895f-deeea3103382/code.power) | [Settings](src/1a4cdbd2-7fcf-40bf-895f-deeea3103382/settings.json) | SPK: `Super---1a4cdbd2_7fcf_40bf_895f_deeea3103382---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminFieldsConditions\Remote](#vdm-joomla-componentbuilder-package-adminfieldsconditions-remote)

  - **class Config** | [Details](src/395c856c-e0de-4d90-ba8b-81013046c64a) | [Raw](src/395c856c-e0de-4d90-ba8b-81013046c64a/code.power) | [Settings](src/395c856c-e0de-4d90-ba8b-81013046c64a/settings.json) | SPK: `Super---395c856c_e0de_4d90_ba8b_81013046c64a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminFieldsRelations\Remote](#vdm-joomla-componentbuilder-package-adminfieldsrelations-remote)

  - **class Config** | [Details](src/bb408189-24dc-4a8f-b77e-cc16f4dd7cef) | [Raw](src/bb408189-24dc-4a8f-b77e-cc16f4dd7cef/code.power) | [Settings](src/bb408189-24dc-4a8f-b77e-cc16f4dd7cef/settings.json) | SPK: `Super---bb408189_24dc_4a8f_b77e_cc16f4dd7cef---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminFields\Remote](#vdm-joomla-componentbuilder-package-adminfields-remote)

  - **class Config** | [Details](src/1e27e0e1-97c5-4f25-87ea-060459c152f4) | [Raw](src/1e27e0e1-97c5-4f25-87ea-060459c152f4/code.power) | [Settings](src/1e27e0e1-97c5-4f25-87ea-060459c152f4/settings.json) | SPK: `Super---1e27e0e1_97c5_4f25_87ea_060459c152f4---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminView\Readme](#vdm-joomla-componentbuilder-package-adminview-readme)

  - **final class Item** | [Details](src/2cdb8a40-843c-4b4e-a3c3-0362f392cca4) | [Raw](src/2cdb8a40-843c-4b4e-a3c3-0362f392cca4/code.power) | [Settings](src/2cdb8a40-843c-4b4e-a3c3-0362f392cca4/settings.json) | SPK: `Super---2cdb8a40_843c_4b4e_a3c3_0362f392cca4---Power`
  - **final class Main** | [Details](src/6d86478e-5747-4dce-a44d-ef5b21ddcfc3) | [Raw](src/6d86478e-5747-4dce-a44d-ef5b21ddcfc3/code.power) | [Settings](src/6d86478e-5747-4dce-a44d-ef5b21ddcfc3/settings.json) | SPK: `Super---6d86478e_5747_4dce_a44d_ef5b21ddcfc3---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\AdminView\Remote](#vdm-joomla-componentbuilder-package-adminview-remote)

  - **final class Config** | [Details](src/7a9928fe-c86f-4bb6-acd5-67ef2ef3b99e) | [Raw](src/7a9928fe-c86f-4bb6-acd5-67ef2ef3b99e/code.power) | [Settings](src/7a9928fe-c86f-4bb6-acd5-67ef2ef3b99e/settings.json) | SPK: `Super---7a9928fe_c86f_4bb6_acd5_67ef2ef3b99e---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Children\Readme](#vdm-joomla-componentbuilder-package-children-readme)

  - **final class Item** | [Details](src/f47153c6-0e21-4dd1-91ab-de2c333f7061) | [Raw](src/f47153c6-0e21-4dd1-91ab-de2c333f7061/code.power) | [Settings](src/f47153c6-0e21-4dd1-91ab-de2c333f7061/settings.json) | SPK: `Super---f47153c6_0e21_4dd1_91ab_de2c333f7061---Power`
  - **final class Main** | [Details](src/6de7d9a3-7e29-4eb6-b057-28019ac2f9c1) | [Raw](src/6de7d9a3-7e29-4eb6-b057-28019ac2f9c1/code.power) | [Settings](src/6de7d9a3-7e29-4eb6-b057-28019ac2f9c1/settings.json) | SPK: `Super---6de7d9a3_7e29_4eb6_b057_28019ac2f9c1---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ClassExtends\Remote](#vdm-joomla-componentbuilder-package-classextends-remote)

  - **class Config** | [Details](src/52ec3708-a183-4f7f-9daf-212096f29c65) | [Raw](src/52ec3708-a183-4f7f-9daf-212096f29c65/code.power) | [Settings](src/52ec3708-a183-4f7f-9daf-212096f29c65/settings.json) | SPK: `Super---52ec3708_a183_4f7f_9daf_212096f29c65---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ClassMethod\Remote](#vdm-joomla-componentbuilder-package-classmethod-remote)

  - **class Config** | [Details](src/f83371ef-7867-4faf-ac15-d82ee5585a4a) | [Raw](src/f83371ef-7867-4faf-ac15-d82ee5585a4a/code.power) | [Settings](src/f83371ef-7867-4faf-ac15-d82ee5585a4a/settings.json) | SPK: `Super---f83371ef_7867_4faf_ac15_d82ee5585a4a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ClassProperty\Remote](#vdm-joomla-componentbuilder-package-classproperty-remote)

  - **class Config** | [Details](src/4869c42a-a447-4597-a755-b7ecb29afb36) | [Raw](src/4869c42a-a447-4597-a755-b7ecb29afb36/code.power) | [Settings](src/4869c42a-a447-4597-a755-b7ecb29afb36/settings.json) | SPK: `Super---4869c42a_a447_4597_a755_b7ecb29afb36---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentAdminViews\Remote](#vdm-joomla-componentbuilder-package-componentadminviews-remote)

  - **class Config** | [Details](src/bd784d56-56bf-4cfa-8622-f30a91248931) | [Raw](src/bd784d56-56bf-4cfa-8622-f30a91248931/code.power) | [Settings](src/bd784d56-56bf-4cfa-8622-f30a91248931/settings.json) | SPK: `Super---bd784d56_56bf_4cfa_8622_f30a91248931---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentConfig\Remote](#vdm-joomla-componentbuilder-package-componentconfig-remote)

  - **class Config** | [Details](src/f9d6a2ec-1531-485a-8a56-67bcee869f92) | [Raw](src/f9d6a2ec-1531-485a-8a56-67bcee869f92/code.power) | [Settings](src/f9d6a2ec-1531-485a-8a56-67bcee869f92/settings.json) | SPK: `Super---f9d6a2ec_1531_485a_8a56_67bcee869f92---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentCustomAdminMenus\Remote](#vdm-joomla-componentbuilder-package-componentcustomadminmenus-remote)

  - **class Config** | [Details](src/44dc0910-f926-4d9b-a629-0a4686d5d2b9) | [Raw](src/44dc0910-f926-4d9b-a629-0a4686d5d2b9/code.power) | [Settings](src/44dc0910-f926-4d9b-a629-0a4686d5d2b9/settings.json) | SPK: `Super---44dc0910_f926_4d9b_a629_0a4686d5d2b9---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentCustomAdminViews\Remote](#vdm-joomla-componentbuilder-package-componentcustomadminviews-remote)

  - **class Config** | [Details](src/dc51e169-9e76-4743-a776-ad94176cfe5f) | [Raw](src/dc51e169-9e76-4743-a776-ad94176cfe5f/code.power) | [Settings](src/dc51e169-9e76-4743-a776-ad94176cfe5f/settings.json) | SPK: `Super---dc51e169_9e76_4743_a776_ad94176cfe5f---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentDashboard\Remote](#vdm-joomla-componentbuilder-package-componentdashboard-remote)

  - **class Config** | [Details](src/233abecf-fd28-418a-9a56-cc3b0fa2362e) | [Raw](src/233abecf-fd28-418a-9a56-cc3b0fa2362e/code.power) | [Settings](src/233abecf-fd28-418a-9a56-cc3b0fa2362e/settings.json) | SPK: `Super---233abecf_fd28_418a_9a56_cc3b0fa2362e---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentFilesFolders\Remote](#vdm-joomla-componentbuilder-package-componentfilesfolders-remote)

  - **class Config** | [Details](src/2b41186e-a3c1-4ceb-8def-c5607fef3a7a) | [Raw](src/2b41186e-a3c1-4ceb-8def-c5607fef3a7a/code.power) | [Settings](src/2b41186e-a3c1-4ceb-8def-c5607fef3a7a/settings.json) | SPK: `Super---2b41186e_a3c1_4ceb_8def_c5607fef3a7a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentModules\Remote](#vdm-joomla-componentbuilder-package-componentmodules-remote)

  - **class Config** | [Details](src/cbdd685f-6752-4d36-bda5-aab2c2083217) | [Raw](src/cbdd685f-6752-4d36-bda5-aab2c2083217/code.power) | [Settings](src/cbdd685f-6752-4d36-bda5-aab2c2083217/settings.json) | SPK: `Super---cbdd685f_6752_4d36_bda5_aab2c2083217---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentPlaceholders\Remote](#vdm-joomla-componentbuilder-package-componentplaceholders-remote)

  - **class Config** | [Details](src/349bc5f4-d021-4bec-ac4d-7b45c9391327) | [Raw](src/349bc5f4-d021-4bec-ac4d-7b45c9391327/code.power) | [Settings](src/349bc5f4-d021-4bec-ac4d-7b45c9391327/settings.json) | SPK: `Super---349bc5f4_d021_4bec_ac4d_7b45c9391327---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentPlugins\Remote](#vdm-joomla-componentbuilder-package-componentplugins-remote)

  - **class Config** | [Details](src/6d906e14-04d3-477e-8801-a73b2004402d) | [Raw](src/6d906e14-04d3-477e-8801-a73b2004402d/code.power) | [Settings](src/6d906e14-04d3-477e-8801-a73b2004402d/settings.json) | SPK: `Super---6d906e14_04d3_477e_8801_a73b2004402d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentRouter\Remote](#vdm-joomla-componentbuilder-package-componentrouter-remote)

  - **class Config** | [Details](src/e9e7fdbf-da5a-4545-9dce-0b884a488aba) | [Raw](src/e9e7fdbf-da5a-4545-9dce-0b884a488aba/code.power) | [Settings](src/e9e7fdbf-da5a-4545-9dce-0b884a488aba/settings.json) | SPK: `Super---e9e7fdbf_da5a_4545_9dce_0b884a488aba---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentSiteViews\Remote](#vdm-joomla-componentbuilder-package-componentsiteviews-remote)

  - **class Config** | [Details](src/8cfc6139-44f2-4fd0-b308-661131b82478) | [Raw](src/8cfc6139-44f2-4fd0-b308-661131b82478/code.power) | [Settings](src/8cfc6139-44f2-4fd0-b308-661131b82478/settings.json) | SPK: `Super---8cfc6139_44f2_4fd0_b308_661131b82478---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\ComponentUpdates\Remote](#vdm-joomla-componentbuilder-package-componentupdates-remote)

  - **class Config** | [Details](src/2c5ebfa2-6ad1-422c-aee4-abb29aac1bd4) | [Raw](src/2c5ebfa2-6ad1-422c-aee4-abb29aac1bd4/code.power) | [Settings](src/2c5ebfa2-6ad1-422c-aee4-abb29aac1bd4/settings.json) | SPK: `Super---2c5ebfa2_6ad1_422c_aee4_abb29aac1bd4---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Component\Readme](#vdm-joomla-componentbuilder-package-component-readme)

  - **final class Item** | [Details](src/6104ed69-3b73-4f40-888c-16a9f957d310) | [Raw](src/6104ed69-3b73-4f40-888c-16a9f957d310/code.power) | [Settings](src/6104ed69-3b73-4f40-888c-16a9f957d310/settings.json) | SPK: `Super---6104ed69_3b73_4f40_888c_16a9f957d310---Power`
  - **final class Main** | [Details](src/e9152636-aebe-494a-9ccc-dae7ea4251a9) | [Raw](src/e9152636-aebe-494a-9ccc-dae7ea4251a9/code.power) | [Settings](src/e9152636-aebe-494a-9ccc-dae7ea4251a9/settings.json) | SPK: `Super---e9152636_aebe_494a_9ccc_dae7ea4251a9---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Component\Remote](#vdm-joomla-componentbuilder-package-component-remote)

  - **final class Config** | [Details](src/91c0f368-33a4-4aef-9f4f-5c636e0a19ea) | [Raw](src/91c0f368-33a4-4aef-9f4f-5c636e0a19ea/code.power) | [Settings](src/91c0f368-33a4-4aef-9f4f-5c636e0a19ea/settings.json) | SPK: `Super---91c0f368_33a4_4aef_9f4f_5c636e0a19ea---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\CustomAdminView\Readme](#vdm-joomla-componentbuilder-package-customadminview-readme)

  - **final class Item** | [Details](src/db7ac2e5-80ad-43f8-877a-7467966e532c) | [Raw](src/db7ac2e5-80ad-43f8-877a-7467966e532c/code.power) | [Settings](src/db7ac2e5-80ad-43f8-877a-7467966e532c/settings.json) | SPK: `Super---db7ac2e5_80ad_43f8_877a_7467966e532c---Power`
  - **final class Main** | [Details](src/6b2753d2-8b9d-4a86-baa9-4dbf5ea071de) | [Raw](src/6b2753d2-8b9d-4a86-baa9-4dbf5ea071de/code.power) | [Settings](src/6b2753d2-8b9d-4a86-baa9-4dbf5ea071de/settings.json) | SPK: `Super---6b2753d2_8b9d_4a86_baa9_4dbf5ea071de---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\CustomAdminView\Remote](#vdm-joomla-componentbuilder-package-customadminview-remote)

  - **final class Config** | [Details](src/75d12bef-64d9-4ee1-84f3-d6cff5c1c94c) | [Raw](src/75d12bef-64d9-4ee1-84f3-d6cff5c1c94c/code.power) | [Settings](src/75d12bef-64d9-4ee1-84f3-d6cff5c1c94c/settings.json) | SPK: `Super---75d12bef_64d9_4ee1_84f3_d6cff5c1c94c---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\CustomCode\Readme](#vdm-joomla-componentbuilder-package-customcode-readme)

  - **final class Item** | [Details](src/4b3318e8-2e06-4c3a-92ac-44bf94894fc6) | [Raw](src/4b3318e8-2e06-4c3a-92ac-44bf94894fc6/code.power) | [Settings](src/4b3318e8-2e06-4c3a-92ac-44bf94894fc6/settings.json) | SPK: `Super---4b3318e8_2e06_4c3a_92ac_44bf94894fc6---Power`
  - **final class Main** | [Details](src/4d442126-de8b-4e56-af33-dfee5fa4e518) | [Raw](src/4d442126-de8b-4e56-af33-dfee5fa4e518/code.power) | [Settings](src/4d442126-de8b-4e56-af33-dfee5fa4e518/settings.json) | SPK: `Super---4d442126_de8b_4e56_af33_dfee5fa4e518---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\CustomCode\Remote](#vdm-joomla-componentbuilder-package-customcode-remote)

  - **final class Config** | [Details](src/61aba2ce-22ad-4bdb-99a1-a71ee7752ea4) | [Raw](src/61aba2ce-22ad-4bdb-99a1-a71ee7752ea4/code.power) | [Settings](src/61aba2ce-22ad-4bdb-99a1-a71ee7752ea4/settings.json) | SPK: `Super---61aba2ce_22ad_4bdb_99a1_a71ee7752ea4---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\DynamicGet\Readme](#vdm-joomla-componentbuilder-package-dynamicget-readme)

  - **final class Item** | [Details](src/53fccc10-ee86-45e4-bd59-b20ee8737c19) | [Raw](src/53fccc10-ee86-45e4-bd59-b20ee8737c19/code.power) | [Settings](src/53fccc10-ee86-45e4-bd59-b20ee8737c19/settings.json) | SPK: `Super---53fccc10_ee86_45e4_bd59_b20ee8737c19---Power`
  - **final class Main** | [Details](src/1219ac4d-03fc-45d5-a8b6-df9971e57fc7) | [Raw](src/1219ac4d-03fc-45d5-a8b6-df9971e57fc7/code.power) | [Settings](src/1219ac4d-03fc-45d5-a8b6-df9971e57fc7/settings.json) | SPK: `Super---1219ac4d_03fc_45d5_a8b6_df9971e57fc7---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\DynamicGet\Remote](#vdm-joomla-componentbuilder-package-dynamicget-remote)

  - **final class Config** | [Details](src/81881bea-755e-4f68-9776-19a73f4f0907) | [Raw](src/81881bea-755e-4f68-9776-19a73f4f0907/code.power) | [Settings](src/81881bea-755e-4f68-9776-19a73f4f0907/settings.json) | SPK: `Super---81881bea_755e_4f68_9776_19a73f4f0907---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Field\Readme](#vdm-joomla-componentbuilder-package-field-readme)

  - **final class Item** | [Details](src/c315c264-0a94-4a06-98e4-3acdf11ac7f5) | [Raw](src/c315c264-0a94-4a06-98e4-3acdf11ac7f5/code.power) | [Settings](src/c315c264-0a94-4a06-98e4-3acdf11ac7f5/settings.json) | SPK: `Super---c315c264_0a94_4a06_98e4_3acdf11ac7f5---Power`
  - **final class Main** | [Details](src/97c69671-8bb5-4857-9173-3bd60c31256d) | [Raw](src/97c69671-8bb5-4857-9173-3bd60c31256d/code.power) | [Settings](src/97c69671-8bb5-4857-9173-3bd60c31256d/settings.json) | SPK: `Super---97c69671_8bb5_4857_9173_3bd60c31256d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Field\Remote](#vdm-joomla-componentbuilder-package-field-remote)

  - **final class Config** | [Details](src/3745cb2f-d6d3-473d-b33c-78f1f74b0bec) | [Raw](src/3745cb2f-d6d3-473d-b33c-78f1f74b0bec/code.power) | [Settings](src/3745cb2f-d6d3-473d-b33c-78f1f74b0bec/settings.json) | SPK: `Super---3745cb2f_d6d3_473d_b33c_78f1f74b0bec---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\File\Remote](#vdm-joomla-componentbuilder-package-file-remote)

  - **class Config** | [Details](src/85cafc31-d81a-4415-8110-ef8c2fb61356) | [Raw](src/85cafc31-d81a-4415-8110-ef8c2fb61356/code.power) | [Settings](src/85cafc31-d81a-4415-8110-ef8c2fb61356/settings.json) | SPK: `Super---85cafc31_d81a_4415_8110_ef8c2fb61356---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Folder\Remote](#vdm-joomla-componentbuilder-package-folder-remote)

  - **class Config** | [Details](src/472830e9-8638-4e62-b7fc-a3c1bb57c319) | [Raw](src/472830e9-8638-4e62-b7fc-a3c1bb57c319/code.power) | [Settings](src/472830e9-8638-4e62-b7fc-a3c1bb57c319/settings.json) | SPK: `Super---472830e9_8638_4e62_b7fc_a3c1bb57c319---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaModuleFilesFoldersUrls\Remote](#vdm-joomla-componentbuilder-package-joomlamodulefilesfoldersurls-remote)

  - **class Config** | [Details](src/4c8644ee-fb6f-44ef-aad4-2ca0ce404cff) | [Raw](src/4c8644ee-fb6f-44ef-aad4-2ca0ce404cff/code.power) | [Settings](src/4c8644ee-fb6f-44ef-aad4-2ca0ce404cff/settings.json) | SPK: `Super---4c8644ee_fb6f_44ef_aad4_2ca0ce404cff---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaModuleUpdates\Remote](#vdm-joomla-componentbuilder-package-joomlamoduleupdates-remote)

  - **class Config** | [Details](src/7d0ee49f-291e-45e3-b2b8-6854eaaada65) | [Raw](src/7d0ee49f-291e-45e3-b2b8-6854eaaada65/code.power) | [Settings](src/7d0ee49f-291e-45e3-b2b8-6854eaaada65/settings.json) | SPK: `Super---7d0ee49f_291e_45e3_b2b8_6854eaaada65---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaModule\Readme](#vdm-joomla-componentbuilder-package-joomlamodule-readme)

  - **final class Item** | [Details](src/8db25c21-9532-44b7-9e7d-d789a97f9f42) | [Raw](src/8db25c21-9532-44b7-9e7d-d789a97f9f42/code.power) | [Settings](src/8db25c21-9532-44b7-9e7d-d789a97f9f42/settings.json) | SPK: `Super---8db25c21_9532_44b7_9e7d_d789a97f9f42---Power`
  - **final class Main** | [Details](src/dc3d2a04-9600-4dc1-bfd5-a6c87daaf40d) | [Raw](src/dc3d2a04-9600-4dc1-bfd5-a6c87daaf40d/code.power) | [Settings](src/dc3d2a04-9600-4dc1-bfd5-a6c87daaf40d/settings.json) | SPK: `Super---dc3d2a04_9600_4dc1_bfd5_a6c87daaf40d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaModule\Remote](#vdm-joomla-componentbuilder-package-joomlamodule-remote)

  - **final class Config** | [Details](src/77ad9271-099e-42f2-a971-4879f1e817c3) | [Raw](src/77ad9271-099e-42f2-a971-4879f1e817c3/code.power) | [Settings](src/77ad9271-099e-42f2-a971-4879f1e817c3/settings.json) | SPK: `Super---77ad9271_099e_42f2_a971_4879f1e817c3---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaPluginFilesFoldersUrls\Remote](#vdm-joomla-componentbuilder-package-joomlapluginfilesfoldersurls-remote)

  - **class Config** | [Details](src/a1bf6575-e270-406a-ac4a-9b0d11168209) | [Raw](src/a1bf6575-e270-406a-ac4a-9b0d11168209/code.power) | [Settings](src/a1bf6575-e270-406a-ac4a-9b0d11168209/settings.json) | SPK: `Super---a1bf6575_e270_406a_ac4a_9b0d11168209---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaPluginGroup\Remote](#vdm-joomla-componentbuilder-package-joomlaplugingroup-remote)

  - **class Config** | [Details](src/b2bc6660-b984-42a8-ac66-682e4b69475b) | [Raw](src/b2bc6660-b984-42a8-ac66-682e4b69475b/code.power) | [Settings](src/b2bc6660-b984-42a8-ac66-682e4b69475b/settings.json) | SPK: `Super---b2bc6660_b984_42a8_ac66_682e4b69475b---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaPluginUpdates\Remote](#vdm-joomla-componentbuilder-package-joomlapluginupdates-remote)

  - **class Config** | [Details](src/f00b0ce0-0f0d-4984-969b-c3eb8c57d588) | [Raw](src/f00b0ce0-0f0d-4984-969b-c3eb8c57d588/code.power) | [Settings](src/f00b0ce0-0f0d-4984-969b-c3eb8c57d588/settings.json) | SPK: `Super---f00b0ce0_0f0d_4984_969b_c3eb8c57d588---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaPlugin\Readme](#vdm-joomla-componentbuilder-package-joomlaplugin-readme)

  - **final class Item** | [Details](src/3f6de913-7701-48dc-9b28-3bb80413bfa1) | [Raw](src/3f6de913-7701-48dc-9b28-3bb80413bfa1/code.power) | [Settings](src/3f6de913-7701-48dc-9b28-3bb80413bfa1/settings.json) | SPK: `Super---3f6de913_7701_48dc_9b28_3bb80413bfa1---Power`
  - **final class Main** | [Details](src/6835a4e6-484c-4c2e-ad2d-bec317053427) | [Raw](src/6835a4e6-484c-4c2e-ad2d-bec317053427/code.power) | [Settings](src/6835a4e6-484c-4c2e-ad2d-bec317053427/settings.json) | SPK: `Super---6835a4e6_484c_4c2e_ad2d_bec317053427---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\JoomlaPlugin\Remote](#vdm-joomla-componentbuilder-package-joomlaplugin-remote)

  - **final class Config** | [Details](src/18a43f02-745b-457a-aa1e-b3d1244be25e) | [Raw](src/18a43f02-745b-457a-aa1e-b3d1244be25e/code.power) | [Settings](src/18a43f02-745b-457a-aa1e-b3d1244be25e/settings.json) | SPK: `Super---18a43f02_745b_457a_aa1e_b3d1244be25e---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Layout\Readme](#vdm-joomla-componentbuilder-package-layout-readme)

  - **final class Item** | [Details](src/4638519a-7961-47d3-a3e1-712b01eaf2b7) | [Raw](src/4638519a-7961-47d3-a3e1-712b01eaf2b7/code.power) | [Settings](src/4638519a-7961-47d3-a3e1-712b01eaf2b7/settings.json) | SPK: `Super---4638519a_7961_47d3_a3e1_712b01eaf2b7---Power`
  - **final class Main** | [Details](src/3c660733-957b-4a19-8e1a-5f388c2340eb) | [Raw](src/3c660733-957b-4a19-8e1a-5f388c2340eb/code.power) | [Settings](src/3c660733-957b-4a19-8e1a-5f388c2340eb/settings.json) | SPK: `Super---3c660733_957b_4a19_8e1a_5f388c2340eb---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Layout\Remote](#vdm-joomla-componentbuilder-package-layout-remote)

  - **final class Config** | [Details](src/9b495838-d43e-4b74-aadc-b711583b3b8d) | [Raw](src/9b495838-d43e-4b74-aadc-b711583b3b8d/code.power) | [Settings](src/9b495838-d43e-4b74-aadc-b711583b3b8d/settings.json) | SPK: `Super---9b495838_d43e_4b74_aadc_b711583b3b8d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\LibraryConfig\Remote](#vdm-joomla-componentbuilder-package-libraryconfig-remote)

  - **class Config** | [Details](src/962f45d1-36d5-4bd8-9ea3-45f93e0b920d) | [Raw](src/962f45d1-36d5-4bd8-9ea3-45f93e0b920d/code.power) | [Settings](src/962f45d1-36d5-4bd8-9ea3-45f93e0b920d/settings.json) | SPK: `Super---962f45d1_36d5_4bd8_9ea3_45f93e0b920d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\LibraryFilesFoldersUrls\Remote](#vdm-joomla-componentbuilder-package-libraryfilesfoldersurls-remote)

  - **class Config** | [Details](src/61fb1b6b-98d9-406c-afa7-f150f2c0b249) | [Raw](src/61fb1b6b-98d9-406c-afa7-f150f2c0b249/code.power) | [Settings](src/61fb1b6b-98d9-406c-afa7-f150f2c0b249/settings.json) | SPK: `Super---61fb1b6b_98d9_406c_afa7_f150f2c0b249---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Library\Readme](#vdm-joomla-componentbuilder-package-library-readme)

  - **final class Item** | [Details](src/05665263-72e9-4f2c-bd58-ddc40af4cc27) | [Raw](src/05665263-72e9-4f2c-bd58-ddc40af4cc27/code.power) | [Settings](src/05665263-72e9-4f2c-bd58-ddc40af4cc27/settings.json) | SPK: `Super---05665263_72e9_4f2c_bd58_ddc40af4cc27---Power`
  - **final class Main** | [Details](src/2ad70998-78de-4c42-aa15-1e5a52d0af8a) | [Raw](src/2ad70998-78de-4c42-aa15-1e5a52d0af8a/code.power) | [Settings](src/2ad70998-78de-4c42-aa15-1e5a52d0af8a/settings.json) | SPK: `Super---2ad70998_78de_4c42_aa15_1e5a52d0af8a---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Library\Remote](#vdm-joomla-componentbuilder-package-library-remote)

  - **final class Config** | [Details](src/00ca7ee7-0a84-4153-b5eb-2091326969e0) | [Raw](src/00ca7ee7-0a84-4153-b5eb-2091326969e0/code.power) | [Settings](src/00ca7ee7-0a84-4153-b5eb-2091326969e0/settings.json) | SPK: `Super---00ca7ee7_0a84_4153_b5eb_2091326969e0---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Placeholder\Remote](#vdm-joomla-componentbuilder-package-placeholder-remote)

  - **class Config** | [Details](src/4e0baec7-8853-4bc3-bf5c-075d54b5deba) | [Raw](src/4e0baec7-8853-4bc3-bf5c-075d54b5deba/code.power) | [Settings](src/4e0baec7-8853-4bc3-bf5c-075d54b5deba/settings.json) | SPK: `Super---4e0baec7_8853_4bc3_bf5c_075d54b5deba---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Remote\CustomCode](#vdm-joomla-componentbuilder-package-remote-customcode)

  - **final class Set** | [Details](src/babbb8b2-d67b-449f-8d01-a4fb20d1ddb1) | [Raw](src/babbb8b2-d67b-449f-8d01-a4fb20d1ddb1/code.power) | [Settings](src/babbb8b2-d67b-449f-8d01-a4fb20d1ddb1/settings.json) | SPK: `Super---babbb8b2_d67b_449f_8d01_a4fb20d1ddb1---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Remote\DynamicGet](#vdm-joomla-componentbuilder-package-remote-dynamicget)

  - **final class Set** | [Details](src/9a96ae4d-8a52-4f30-a015-7b3334a37aaa) | [Raw](src/9a96ae4d-8a52-4f30-a015-7b3334a37aaa/code.power) | [Settings](src/9a96ae4d-8a52-4f30-a015-7b3334a37aaa/settings.json) | SPK: `Super---9a96ae4d_8a52_4f30_a015_7b3334a37aaa---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\SiteView\Readme](#vdm-joomla-componentbuilder-package-siteview-readme)

  - **final class Item** | [Details](src/b6473d0a-ad7f-4c6e-b478-349b3bb487f5) | [Raw](src/b6473d0a-ad7f-4c6e-b478-349b3bb487f5/code.power) | [Settings](src/b6473d0a-ad7f-4c6e-b478-349b3bb487f5/settings.json) | SPK: `Super---b6473d0a_ad7f_4c6e_b478_349b3bb487f5---Power`
  - **final class Main** | [Details](src/660846aa-a56a-4725-8ac2-b9dc4e22cea0) | [Raw](src/660846aa-a56a-4725-8ac2-b9dc4e22cea0/code.power) | [Settings](src/660846aa-a56a-4725-8ac2-b9dc4e22cea0/settings.json) | SPK: `Super---660846aa_a56a_4725_8ac2_b9dc4e22cea0---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\SiteView\Remote](#vdm-joomla-componentbuilder-package-siteview-remote)

  - **final class Config** | [Details](src/c1901acb-890d-4950-b49e-7dec4f232876) | [Raw](src/c1901acb-890d-4950-b49e-7dec4f232876/code.power) | [Settings](src/c1901acb-890d-4950-b49e-7dec4f232876/settings.json) | SPK: `Super---c1901acb_890d_4950_b49e_7dec4f232876---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Template\Readme](#vdm-joomla-componentbuilder-package-template-readme)

  - **final class Item** | [Details](src/69b9f7dc-7617-4ee9-b43c-1b9a7afd6761) | [Raw](src/69b9f7dc-7617-4ee9-b43c-1b9a7afd6761/code.power) | [Settings](src/69b9f7dc-7617-4ee9-b43c-1b9a7afd6761/settings.json) | SPK: `Super---69b9f7dc_7617_4ee9_b43c_1b9a7afd6761---Power`
  - **final class Main** | [Details](src/ac332016-8e02-4c7a-b6f1-6174ba0c1abb) | [Raw](src/ac332016-8e02-4c7a-b6f1-6174ba0c1abb/code.power) | [Settings](src/ac332016-8e02-4c7a-b6f1-6174ba0c1abb/settings.json) | SPK: `Super---ac332016_8e02_4c7a_b6f1_6174ba0c1abb---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Package\Template\Remote](#vdm-joomla-componentbuilder-package-template-remote)

  - **final class Config** | [Details](src/c2dd901b-800d-4cb8-85d8-1e09ba731f1e) | [Raw](src/c2dd901b-800d-4cb8-85d8-1e09ba731f1e/code.power) | [Settings](src/c2dd901b-800d-4cb8-85d8-1e09ba731f1e/settings.json) | SPK: `Super---c2dd901b_800d_4cb8_85d8_1e09ba731f1e---Power`
> remember to replace the `---` with `___` in the SPK to activate that Power in your code

### All used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")